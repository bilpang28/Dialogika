<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        if (Auth::user()->role != 'admin') {
            $articles = Article::where('user_id', Auth::user()->id)->with(['user', 'category'])->paginate(9);
        } else {
            $articles = Article::with(['writer', 'categories'])->paginate(9);
        }

        $user = Auth::user();

        return view('pages.profile.index' , compact('articles', 'user'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
        ]);

        $user = auth()->user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return redirect()->route('profile.index');
    }
}

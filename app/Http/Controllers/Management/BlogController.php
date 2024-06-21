<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index()
    {
        if (Auth::user()->role != 'admin') {
            $articles = Article::where('user_id', Auth::user()->id)->with(['user', 'category'])->paginate(9);
        } else {
            $articles = Article::with(['user', 'category'])->paginate(9);
        }

        return view('pages.management.blog.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.management.blog.create', compact('categories'));
    }

    public function detail($id)
    {
        $article = Article::findOrFail($id);
        if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
            // return 404
            return abort(404);
        }

        return view('pages.management.blog.detail', compact('article'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'header_pic' => 'required|file|max:255',
            'title' => 'required|string|max:30',
            'body' => 'required|string',
            'source' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|file|max:255',
        ]);
        $file = $request->file("header_pic");
        $header_pic = time() . "_" . $request->title . "." . $file->getClientOriginalExtension();
        $file->storeAs('/article/header/', $header_pic, 'public');

        $profile_pic = null;
        if ($request->profile_pic) {
            $file = $request->file("profile_pic");
            $profile_pic = time() . "_" . $request->title . "." . $file->getClientOriginalExtension();
            $file->storeAs('/articl/profile_pic/', $profile_pic, 'public');
        }

        $article = Article::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'header_pic' => $header_pic,
            'title' => $request->title,
            'body' => $request->body,
            'source' => $request->source,
            'profile_pic' => $profile_pic,
        ]);

        return redirect()->route('management.blog.index')->with('success', 'Article created successfully.');
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
            // return 404
            return abort(404);
        }

        $categories = Category::all();
        return view('pages.management.blog.edit', compact('categories', 'article'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'header_pic' => 'nullable|file|max:255',
            'title' => 'required|string|max:30',
            'body' => 'required|string',
            'source' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|file|max:255',
        ]);

        $article = Article::findOrFail($id);
        if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
            // return 404
            return abort(404);
        }

        $header_pic = $article->header_pic;
        if ($request->header_pic) {
            $file = $request->file("header_pic");
            $file->storeAs('/article/header/', $article->header_pic, 'public');
        }

        $profile_pic = $article->profile_pic;
        if ($request->profile_pic) {
            $file = $request->file("profile_pic");
            $profile_pic = time() . "_" . $request->title . "." . $file->getClientOriginalExtension();
            $file->storeAs('/articl/profile_pic/', $profile_pic, 'public');
        }

        $article->update([
            'category_id' => $request->category_id,
            'title' => $request->title,
            'body' => $request->body,
            'source' => $request->source,
        ]);

        return redirect()->route('management.blog.index')->with('success', 'Article updated successfully.');
    }

    public function destroy(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:articles,id',
        ]);

        $article = Article::findOrFail($request->id);
        if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
            // return 404
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        Storage::disk('public')->delete('/article/header/' . $article->header_pic);

        $article->delete();
        return response()->json(['message' => 'Article deleted successfully.']);
    }
}

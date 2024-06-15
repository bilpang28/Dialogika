<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('pages.management.blog.index');
    }

    public function create()
    {
        $categories = Category::all();
        return view('pages.management.blog.create', compact('categories'));
    }
    public function edit(){
        $categories = Category::all();
        return view('pages.management.blog.edit', compact('categories'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'header_pic' => 'required|string|max:255',
            'title' => 'required|string|max:30',
            'body' => 'required|string',
            'source' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|string|max:255',
        ]);

        Article::create([
            'user_id' => Auth::user()->id,
            'category_id' => $request->category_id,
            'header_pic' => $request->header_pic,
            'title' => $request->title,
            'body' => $request->body,
            'source' => $request->source,
            'profile_pic' => $request->profile_pic,
            'rating' => $request->rating,
        ]);

        return redirect()->route('articles.create')->with('success', 'Article created successfully.');
    }
}

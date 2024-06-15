<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\CreateArticle;
use Illuminate\Http\Request;

class CreateArticleController extends Controller
{
    /**
     * Display a listing of the articles.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = CreateArticle::all();
        return view('articles.index', compact('articles'));
    }

    /**
     * Show the form for creating a new article.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('articles.create');
    }

    /**
     * Store a newly created article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'header_pic' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'source' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|string|max:255',
            'rating' => 'nullable|integer',
        ]);

        CreateArticle::create($request->all());

        return redirect()->route('articles.index')->with('success', 'Article created successfully.');
    }

    /**
     * Display the specified article.
     *
     * @param  \App\Models\CreateArticle  $article
     * @return \Illuminate\Http\Response
     */
    public function show(CreateArticle $article)
    {
        return view('articles.show', compact('article'));
    }

    /**
     * Show the form for editing the specified article.
     *
     * @param  \App\Models\CreateArticle  $article
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateArticle $article)
    {
        return view('articles.edit', compact('article'));
    }

    /**
     * Update the specified article in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateArticle  $article
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateArticle $article)
    {
        $request->validate([
            'user_id' => 'required|integer',
            'category_id' => 'required|integer',
            'header_pic' => 'required|string|max:255',
            'title' => 'required|string|max:255',
            'body' => 'required|string',
            'source' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|string|max:255',
            'rating' => 'nullable|integer',
        ]);

        $article->update($request->all());

        return redirect()->route('articles.index')->with('success', 'Article updated successfully.');
    }

    /**
     * Remove the specified article from storage.
     *
     * @param  \App\Models\CreateArticle  $article
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateArticle $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with('success', 'Article deleted successfully.');
    }
}

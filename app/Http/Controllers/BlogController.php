<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Rating;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $articles = Article::with(['writer', 'categories'])->paginate(9);

        return view('pages.blog.index', compact('articles'));
    }

    public function detail($id)
    {
        $article = Article::with(['writer', 'writers', 'categories'])->findOrFail($id);

        return view('pages.blog.detail', compact('article'));
    }

    public function rating(Request $request)
    {
        $request->validate([
            'article_id' => 'required|exists:articles,id',
            'rating' => 'required|in:1,2,3,4,5',
        ]);

        Rating::create([
            'article_id' => $request->article_id,
            'rating' => $request->rating,
            'name' => $request->name,
            'comment' => $request->comment,
        ]);

        return response()->json([
            'message' => 'Rating success',
        ]);
    }
}

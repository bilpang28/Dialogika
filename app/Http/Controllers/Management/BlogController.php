<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleCategory;
use App\Models\Category;
use App\Models\Rating;
use App\Models\User;
use App\Models\UserArticle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        if (Auth::user()->role != 'admin') {
            $articles = Article::where('title', 'LIKE', '%' . $request->search . '%')->where('user_id', Auth::user()->id)->with(['writer', 'categories'])->paginate(9);
        } else {
            $articles = Article::where('title', 'LIKE', '%' . $request->search . '%')->with(['writer', 'categories'])->paginate(9);
        }

        return view('pages.management.blog.index', compact('articles'));
    }

    public function create()
    {
        $categories = Category::all();
        $writers = User::where('role', 'writer')->get();
        return view('pages.management.blog.create', compact('categories', 'writers'));
    }

    public function detail($id)
    {
        $article = Article::findOrFail($id);
        // if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
        //     // return 404
        //     return abort(404);
        // }

        return view('pages.management.blog.detail', compact('article'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'category_id' => 'required|array',
            'header_pic' => 'required|file',
            'title' => 'required|string',
            'body' => 'required|string',
            'source' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|file|max:255',
            'writer_id' => 'required|array',
            'keyword' => 'required|string',
        ]);

        DB::transaction(function () use ($request) {
            $file = $request->file("header_pic");
            $header_pic = time() . "." . $file->getClientOriginalExtension();
            $file->storeAs('/article/header/', $header_pic, 'public');

            $article = Article::create([
                'user_id' => Auth::user()->id,
                'header_pic' => $header_pic,
                'title' => $request->title,
                'body' => $request->body,
                'source' => $request->source,
                'keyword' => $request->keyword,
            ]);

            foreach ($request->writer_id as $writer_id) {
                UserArticle::create([
                    'user_id' => $writer_id,
                    'article_id' => $article->id,
                ]);
            }

            foreach ($request->category_id as $category_id) {
                ArticleCategory::create([
                    'article_id' => $article->id,
                    'category_id' => $category_id,
                ]);
            }
        });

        return response()->json(['message' => 'Article created successfully.']);
    }

    public function edit($id)
    {
        $article = Article::findOrFail($id);
        // if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
        //     // return 404
        //     return abort(404);
        // }

        $writers = User::where('role', 'writer')->get();
        $categories = Category::all();
        return view('pages.management.blog.edit', compact('categories', 'article', 'writers'));
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'category_id' => 'required|exists:categories,id',
            'header_pic' => 'nullable|file|max:255',
            'title' => 'required|string',
            'body' => 'required|string',
            'source' => 'nullable|string|max:255',
            'profile_pic' => 'nullable|file|max:255',
        ]);

        $article = Article::findOrFail($id);
        // if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
        //     // return 404
        //     return abort(404);
        // }

        if ($request->header_pic) {
            $file = $request->file("header_pic");
            $file->storeAs('/article/header/', $article->header_pic, 'public');
        }

        $article->update([
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

        DB::transaction(function () use ($request) {
            ArticleCategory::where('article_id', $request->id)->delete();
            Rating::where('article_id', $request->id)->delete();
            UserArticle::where('article_id', $request->id)->delete();
            $article = Article::findOrFail($request->id);
            // if ($article->user_id != Auth::user()->id || Auth::user()->role != 'admin') {
            //     // return 404
            //     return response()->json(['message' => 'Unauthorized'], 401);
            // }

            Storage::disk('public')->delete('/article/header/' . $article->header_pic);

            $article->delete();
        });

        return response()->json(['message' => 'Article deleted successfully.']);
    }
}

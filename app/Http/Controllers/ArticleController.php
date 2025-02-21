<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('articles', ['articles' => Article::latest()->get()]);
    }

    public function create()
    {
        return view('cms.articles.create');
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'content' => 'required']);
        Article::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Article Created!');
    }

    public function edit(Article $article)
    {
        return view('cms.articles.edit', compact('article'));
    }

    public function update(Request $request, Article $article)
    {
        $request->validate(['title' => 'required', 'content' => 'required']);
        $article->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Article Updated!');
    }

    public function destroy(Article $article)
    {
        $article->delete();
        return redirect()->route('dashboard')->with('success', 'Article Deleted!');
    }
}

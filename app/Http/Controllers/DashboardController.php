<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Post;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $posts = Post::latest()->get();
        $articles = Article::latest()->get();

        return view('dashboard.index', compact('posts', 'articles'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        return view('blog', ['posts' => Post::latest()->get()]);
    }

    public function create()
    {
        return view('cms.posts.create');
    }

    public function store(Request $request)
    {
        $request->validate(['title' => 'required', 'content' => 'required']);
        Post::create($request->all());
        return redirect()->route('dashboard')->with('success', 'Post Created!');
    }

    public function edit(Post $post)
    {
        return view('cms.posts.edit', compact('post'));
    }

    public function update(Request $request, Post $post)
    {
        $request->validate(['title' => 'required', 'content' => 'required']);
        $post->update($request->all());
        return redirect()->route('dashboard')->with('success', 'Post Updated!');
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('dashboard')->with('success', 'Post Deleted!');
    }
}

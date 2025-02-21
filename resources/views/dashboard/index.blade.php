@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>CMS Dashboard</h2>
        <div style="display: flex; justify-content: end">
            <a href="{{ route('posts.create') }}" class="btn btn-primary" style="margin-right: 10px;">Create Blog Post</a>
            <a href="{{ route('articles.create') }}" class="btn btn-primary">Create Article</a>
        </div>

        <h3>All Blog Posts</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{ $post->title }}</td>
                        <td>
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <h3>All Articles</h3>
        <table class="table">
            <thead>
                <tr>
                    <th>Title</th>
                    <th>Actions</th>
                </tr>
            </thead>

            <tbody>
                @forelse ($articles as $article)
                    <tr>
                        <td>{{ $article->title }}</td>
                        <td>
                            <a href="{{ route('articles.edit', $article->id) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('articles.destroy', $article->id) }}" method="POST" style="display:inline;">
                                @csrf @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                @empty
                @endforelse
            </tbody>
        </table>
    </div>
@endsection

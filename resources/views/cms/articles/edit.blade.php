@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Blog Article</h2>
        <form action="{{ route('articles.update', $article->id) }}" method="POST">
            @csrf @method('PUT')
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $article->title }}" required>

            <label>Content</label>
            <textarea name="content" class="form-control" required>{{ $article->content }}</textarea>

            <button type="submit" class="btn btn-success mt-3">Update Article</button>
        </form>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Edit Blog Post</h2>
        <form action="{{ route('posts.update', $post->id) }}" method="POST">
            @csrf @method('PUT')
            <label>Title</label>
            <input type="text" name="title" class="form-control" value="{{ $post->title }}" required>

            <label>Content</label>
            <textarea name="content" class="form-control" required>{{ $post->content }}</textarea>

            <button type="submit" class="btn btn-success mt-3">Update Post</button>
        </form>
    </div>
@endsection

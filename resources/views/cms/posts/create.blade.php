@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Blog Post</h2>
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>

            <label>Content</label>
            <textarea name="content" class="form-control" required></textarea>

            <button type="submit" class="btn btn-success mt-3">Save Post</button>
        </form>
    </div>
@endsection

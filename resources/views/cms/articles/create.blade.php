@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Create Blog Article</h2>
        <form action="{{ route('articles.store') }}" method="POST">
            @csrf
            <label>Title</label>
            <input type="text" name="title" class="form-control" required>

            <label>Content</label>
            <textarea name="content" class="form-control" required></textarea>

            <button type="submit" class="btn btn-success mt-3">Save Article</button>
        </form>
    </div>
@endsection

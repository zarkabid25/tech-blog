@extends('layouts.app')

@section('content')
    <div class="container">
        <h2 class="my-4">Latest Blog Posts</h2>

        @auth
            <a href="{{ route('blog.create') }}" class="btn btn-primary mb-3">Create New Post</a>
        @endauth

        @foreach($posts as $post)
            <div class="card mb-3">
                <div class="card-body">
                    <h4>{{ $post->title }}</h4>
                    <p>{{ Str::limit($post->content, 150) }}</p>
                    <a href="#" class="btn btn-sm btn-secondary">Read More</a>

                    @auth
                        <a href="{{ route('blog.edit', $post->id) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('blog.destroy', $post->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-sm btn-danger">Delete</button>
                        </form>
                    @endauth
                </div>
            </div>
        @endforeach
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="display: flex; justify-content: end">
            <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
        </div>

        <h2 style="text-align: center">Posts</h2>
        @foreach ($posts as $post)
            <div class="card">
                <div class="card-body">
                    <h3>{{ $post->title }}</h3>
                    <p>{{ Str::limit($post->content, 100) }}</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        @endforeach
    </div>
@endsection

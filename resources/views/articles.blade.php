@extends('layouts.app')

@section('content')
    <div class="container">
        <div style="display: flex; justify-content: end">
            <a href="{{ url('/') }}" class="btn btn-secondary">Back to Home</a>
        </div>

        <h2 style="text-align: center">Articles</h2>
        @forelse ($articles as $article)
            <div class="card">
                <div class="card-body">
                    <h3>{{ $article->title }}</h3>
                    <p>{{ Str::limit($article->content, 100) }}</p>
                    <a href="#">Read More</a>
                </div>
            </div>
        @empty
        @endforelse
    </div>
@endsection

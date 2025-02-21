@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1>Welcome to Tech Blog</h1>
        <p>The best place to learn about the latest technology trends.</p>
        <a href="{{ route('blog') }}" class="btn btn-primary">Read Blog</a>
        <a href="{{ route('articles') }}" class="btn btn-primary">Read Articles</a>
    </div>
@endsection

@extends('layouts.base')

@section('content')
<h1>Category: {{ $category->name }}</h1>

<p>Slug: {{ $category->slug }}</p>
<p>Posts:</p>

<ul>
    @foreach ($posts as $post)
        <li><a href="{{ route('posts.show', $post->slug) }}">{{ $post->title }}</a></li>
    @endforeach
</ul>

<a href="{{ route('categories.index') }}" class="btn btn-primary">Back to Categories</a>
<a href="{{ route('categories.edit', $category->slug) }}" class="btn btn-warning">Edit</a>

@if ($category->posts()->count() === 0)
    <form action="{{ route('categories.destroy', $category->slug) }}" method="POST" class="d-inline">
        @method('DELETE')
        @csrf
        <button type="submit" class="btn btn-danger">Delete Category</button>
    </form>
@endif

@endsection

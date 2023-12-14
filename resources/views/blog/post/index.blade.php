@extends('layouts.base')

@section('content')
<div class="container">



    <div class="card-body">
        @if (session('success'))
        <div class="alert alert-success" role="alert">
            {{ session('success') }}
        </div>
        @endif

        @forelse ($posts as $post)
        <div class="card mb-3">
            <div class="card-header">
                <a href="{{ route('post.show', $post) }}">{{ $post->name }}</a>
            </div>
            <div class="card-body">
                {{ $post->excerpt }}
            </div>
            <div class="card-footer">
                <a href="{{ route('post.show', $post->slug) }}" class="btn btn-primary">Read More</a>
                <a href="{{ route('post.edit', $post) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('post.destroy', $post) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
        @empty
        <p>No posts found.</p>
        @endforelse
    </div>
</div>

@endsection
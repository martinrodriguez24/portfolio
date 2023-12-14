@extends('layouts.base')

@section('content')
    <div class="card mb-3">
        <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">
        <div class="card-body">
            <h5 class="card-title">{{ $post->title }}</h5>
            <p class="card-text">{{ $post->content }}</p>
            <div class="card-footer text-muted">
                <span class="mr-2">Published at: {{ $post->created_at->format('d M, Y') }}</span>
                
                <a href="{{ route('post.edit', $post) }}" class="btn btn-warning">Edit</a>
                <form action="{{ route('post.destroy', $post) }}" method="POST" class="d-inline">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </div>
        </div>
    </div>

    @endsection

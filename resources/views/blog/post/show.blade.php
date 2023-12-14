@extends('layouts.base')

@section('content')
@foreach ($categories as $category)
<tr>
    <td>{{ $category->name }}</td>
</tr>
@endforeach

<form method="POST" action="{{ route('posts.attachCategory') }}" class="mt-3">
    @csrf
    <div class="form-group">
        <input type="hidden" name="post_id" value="{{ $post->id }}">
        <label for="category_id">Category:</label>
        <select name="category_id" id="category_id" class="form-control">
            @foreach ($categories as $category)
            <option value="{{ $category->id }}">{{ $category->name }}</option>
            @endforeach
        </select>
        @error('category_id')
        <small class="text-danger">{{ $message }}</small>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Attach Category</button>
</form>
<br>

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
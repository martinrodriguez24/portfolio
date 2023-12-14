@extends('layouts.base')

@section('content')
<h1>Create Category</h1>

<form action="{{ route('category.store') }}" method="POST">
    @csrf
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name" value="{{ old('name') }}" required>
        @error('name')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <label for="slug">Slug:</label>
        <input type="text" class="form-control @error('slug') is-invalid @enderror" id="slug" name="slug" value="{{ old('slug') }}" required>
        @error('slug')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>

    <div class="form-group">
        <label for="description">Description:</label>
        <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description" rows="3">{{ old('description') }}</textarea>
        @error('description')
        <span class="invalid-feedback" role="alert">{{ $message }}</span>
        @enderror
    </div>



    <button type="submit" class="btn btn-primary">Create</button>
</form>

@endsection
@extends('layouts.base')

@section('content')
<h1>Categories</h1>

<a href="{{ route('category.create') }}" class="btn btn-primary">Create Category</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>Name</th>
            <th>Slug</th>
            <th>Posts</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($categories as $category)
            <tr>
                <td>{{ $category->name }}</td>
                <td>{{ $category->slug }}</td>
                <td>{{ $category->description }}</td>
                <td>
                    <a href="{{ route('category.show', $category->slug) }}" class="btn btn-sm btn-info">View</a>
                    <a href="{{ route('category.edit', $category->slug) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('category.destroy', $category->slug) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-sm btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>

@endsection

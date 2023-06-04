@extends('layouts.master')
@section('title')
    Update Category
@endsection
@section('content')
    <h4>Category Edit</h4>
    <form action="{{ route('category.update', $category->id) }}" method="post">
        @method('put')
        @csrf
        <div class="mb-3">
            <label class="form-label">Category Name</label>
            <input type="text" class="form-control" value="{{ $category->title }}" name="title">
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="7" class="form-control">{{ $category->description }}</textarea>
        </div>
        <button class="btn btn-primary">Update Category</button>
    </form>
@endsection

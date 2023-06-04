@extends('layouts.master')
@section('title')
    Create Category
@endsection
@section('content')
    <h4>Create Category</h4>
    <form action="{{ route('category.store') }}" method="post">
        @csrf
        <div class="mb-3">
            <label class="form-label">Category Title</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" name="title">
            @error('title')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea name="description" rows="7" class="form-control @error('description') is-invalid @enderror"></textarea>
            @error('description')
                <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>

        <button class="btn btn-primary">Save Category</button>
    </form>
@endsection

@extends('layouts.master')
@section('title')
    Category Lists
@endsection
@section('content')
    <h4>Category Lists</h4>
    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Title</td>
                <td>description</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse($categories as $category)
                <tr>
                    <td>{{ $category->id }}</td>
                    <td>{{ $category->title }}</td>
                    <td>{{ Str::limit($category->description, 30, '...') }}</td>
                    <td>
                        <a href="{{ route('category.show', $category->id) }}"
                            class="btn btn-sm btn-outline-primary">Detail</a>
                        <a href="{{ route('category.edit', $category->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                        <form action="{{ route('category.destroy', $category->id) }}" method="post" class="d-inline-block">
                            @method('delete')
                            @csrf
                            <button class="btn btn-sm btn-outline-danger">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">
                        <p>
                            There is no records
                        </p>
                        <a href="{{ route('item.create') }}" class="btn btn-sm btn-outline-primary">Create Item</a>
                    </td>
                </tr>
            @endforelse
        </tbody>
    </table>
@endsection

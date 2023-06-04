@extends('layouts.master')
@section('title')
    Item Lists
@endsection
@section('content')
    <h4>Item Lists
        @if(request()->has('keyword'))
            [Search by '{{ request()->keyword }}']
        @endif
    </h4>
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif
    <div class="row justify-content-between mb-3">
        <div class="col-md-3">
            <a href="{{ route('item.create') }}" class="btn btn-outline-primary btn-sm">Create</a>
            <a href="{{ route('item.index',['name'=>'asc']) }}" class="btn btn-outline-info btn-sm">ASC</a>
            <a href="{{ route('item.index',['name'=>'desc']) }}" class="btn btn-outline-warning btn-sm">DES</a>
            <a href="{{ route('item.index') }}" class="btn btn-outline-danger btn-sm">Clear</a>
        </div>
        <div class="col-md-5">
            <form action="{{ route('item.index') }}" method="get">
                <div class="input-group">
                    <input type="text"
                           class="form-control"
                           name="keyword"
                           @if(request()->has('keyword'))
                           @endif
                           value="{{ request()->keyword }}"
                    >
                    <button class="btn btn-primary">Search</button>
                </div>
            </form>
        </div>
    </div>

    <table class="table">
        <thead>
            <tr>
                <td>#</td>
                <td>Name</td>
                <td>Price</td>
                <td>Stock</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @forelse($items as $item)
                <tr>
                    <td>{{ $item->id }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->price }}</td>
                    <td>{{ $item->stock }}</td>
                    <td>
                        <a href="{{ route('item.show', $item->id) }}" class="btn btn-sm btn-outline-primary">Detail</a>
                        <a href="{{ route('item.edit', $item->id) }}" class="btn btn-sm btn-outline-warning">Edit</a>
                        <form action="{{ route('item.destroy', $item->id) }}" method="post" class="d-inline-block">
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
    {{ $items->onEachSide(3)->links() }}
@endsection

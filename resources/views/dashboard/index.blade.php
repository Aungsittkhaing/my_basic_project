@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')

    <h4>I am dashboard</h4>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid odit pariatur, repellat repellendus similique velit? Cum explicabo labore laborum maxime molestias nihil nostrum obcaecati quo reiciendis voluptatum! Necessitatibus, nihil, nostrum!
    </p>
    <div class="alert alert-info">
        {{ session('auth')->name }}
    </div>
    <form action="{{ route('auth.logout') }}" method="post">
        @csrf
        <button class="btn btn-danger">LogOut</button>
    </form>
@endsection

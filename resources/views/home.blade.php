@extends('layouts.master')
@section('title')
    Home Page
@endsection
@section('content')
    <h4>I am home</h4>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid odit pariatur, repellat repellendus similique velit? Cum explicabo labore laborum maxime molestias nihil nostrum obcaecati quo reiciendis voluptatum! Necessitatibus, nihil, nostrum!
    </p>
    <div class="alert alert-info">
        {{ route('multi',[5,5, "a"=>"aaa", "b"=>"bbb", "c"=>"ccc"]) }}
    </div>
@endsection

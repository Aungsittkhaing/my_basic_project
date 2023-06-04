@extends('layouts.master')
@section('title')
    Forgot Password
@endsection
@section('content')
    <h4>Forgot Password</h4>

    <form action="{{ route('auth.checkEmail') }}" method="post" class="form-control">
        @csrf
        <div class="mb-3">
            <label class="form-label">Enter your Email</label>
            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email">
            @error('email')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-warning">Reset</button>
        </div>
    </form>
@endsection

@extends('layouts.master')
@section('title')
    Password Changing
@endsection
@section('content')
    <h4>Password Changing</h4>

    <form action="{{ route('auth.passwordChanging') }}" method="post" class="form-control">
        @csrf
        <div class="mb-3">
            <label class="form-label">Current Password</label>
            <input type="password" class="form-control @error('current_password') is-invalid @enderror" name="current_password">
            @error('current_password')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Update Password</label>
            <input type="password" class="form-control @error('password') is-invalid @enderror" name="password">
            @error('password')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="form-label">Password Confirmation</label>
            <input type="pa
            ssword" class="form-control @error('password_confirmation') is-invalid @enderror" name="password_confirmation">
            @error('password_confirmation')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-warning">Change Now</button>
        </div>
    </form>
@endsection

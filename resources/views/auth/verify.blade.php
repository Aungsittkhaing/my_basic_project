@extends('layouts.master')
@section('title')
    verify
@endsection
@section('content')
    <h4>verify</h4>

    <form action="{{ route('auth.verifying') }}" method="post" class="form-control">
        @csrf
        <div class="mb-3">
            <label class="form-label">Verify Code</label>
            <input type="number" class="form-control @error('verify_code') is-invalid @enderror" name="verify_code">
            @error('verify_code')
            <div class="invalid-feedback"> {{ $message }}</div>
            @enderror
        </div>
        <div class="mb-3">
            <button class="btn btn-warning">Verify</button>
        </div>
    </form>
@endsection

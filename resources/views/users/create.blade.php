@extends('layouts.template')
@section('contents')

<div class="container">
    <h1 class="mt-5">Create User</h1>
    <form action="{{ route('users.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" name="username" id="username" class="form-control" value="{{ old('username') }}">
            @error('username')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" name="password" id="password" class="form-control">
            @error('password')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="role">Role:</label>
            <input type="text" name="role" id="role" class="form-control" value="{{ old('role') }}">
            @error('role')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        {{-- <div class="form-group">
            <label for="phone_number">Phone Number:</label>
            <input type="text" id="phone_number" name="phone_number" required>
        </div> --}}
        <div class="form-group">
            <label for="phone_number">Nomor Handphone:</label>
            <input type="text" name="phone_number" id="phone_number" class="form-control">
            @error('phone_number')
            <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
</div>

@endsection
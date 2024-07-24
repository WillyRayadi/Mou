@extends('welcome')
@section('contents')

{{-- @section('content') --}}
<div class="container">
    <h1 class="mt-5">Edit Category</h1>
    <form action="{{ route('categories.update', $category->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $category->name }}" required>
        </div>
        <button type="submit" class="btn btn-primary">Save</button>
    </form>
</div>
@endsection
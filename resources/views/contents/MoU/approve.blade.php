@extends('welcome')
@section('contents')

{{-- @section('content') --}}
<div class="container">
    <h1 class="mt-5">Approve MoU</h1>
    <form action="{{ route('mous.approve', $mou->id) }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="signature">Tanda Tangan Digital</label>
            <textarea name="signature" id="signature" class="form-control" rows="5" required></textarea>
            <input type="hidden" name="mou_id" value="{{ $mou->id }}" >
        </div>
        <button type="submit" class="btn btn-primary">Approve</button>
    </form>
</div>
@endsection
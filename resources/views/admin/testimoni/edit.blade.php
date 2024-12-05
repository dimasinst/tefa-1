@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Testimoni</h1>
    <form action="{{ route('admin.testimoni.update', $testimonial->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="image">Gambar Testimoni</label>
            <input type="file" name="image" class="form-control">
        </div>
        <button type="submit" class="btn btn-success mt-3">Update</button>
    </form>
</div>
@endsection

@extends('layouts.admin')

@section('content')
<div class="container mt-5">
<div class="d-flex justify-content-start mb-4">
        <a href="{{ route('admin.testimoni.index') }}" class="btn btn-dark btn-lg">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
    </div>
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

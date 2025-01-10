@extends('layouts.admin')

@section('content')
<div class="container mt-5">
<div class="d-flex justify-content-start mb-4">
        <a href="{{ route('admin.testimoni.index') }}" class="btn btn-dark btn-lg">
            <i class="bi bi-arrow-left-circle"></i> Kembali
        </a>
    </div>
    <h1 class="mb-4">Tambah Testimoni</h1>
    <form action="{{ route('admin.testimoni.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="image">Gambar Testimoni</label>
            <input type="file" name="image" class="form-control" required>
        </div>
        <button type="submit" class="btn btn-success mt-3">Simpan</button>
    </form>
</div>
@endsection

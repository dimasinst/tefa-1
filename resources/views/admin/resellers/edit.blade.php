@extends('layouts.admin')

@section('content')
<div class="container mt-1 pt-1">
    <h2 class="mb-4 text-center text-primary">Edit Partners</h2>

    <form action="{{ route('admin.resellers.update', $reseller->id) }}" method="POST" class="p-4 shadow-lg rounded bg-white">
        @csrf
        @method('PUT')

        <!-- Nama Reseller -->
        <div class="mb-3">
            <label for="name" class="form-label">Nama Partners</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $reseller->name }}" required>
        </div>

        <!-- Provinsi -->
        <div class="mb-3">
            <label for="province" class="form-label">Provinsi</label>
            <input type="text" class="form-control" id="province" name="province" value="{{ $reseller->province }}" required>
        </div>

        <!-- Kota -->
        <div class="mb-3">
            <label for="city" class="form-label">Kota</label>
            <input type="text" class="form-control" id="city" name="city" value="{{ $reseller->city }}" required>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-3">
            <label for="phone" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $reseller->phone }}">
        </div>

        <!-- Instagram -->
        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $reseller->instagram }}" required>
        </div>

        <!-- Tombol Simpan dan Kembali -->
        <div class="d-flex justify-content-between mt-4">
            <!-- Tombol Simpan -->
            <button type="submit" class="btn" style="background: linear-gradient(to right, #ff0000, #ffcc00); color: white; border-radius: 50px; padding: 10px 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <i class="fas fa-save me-2"></i> Simpan
            </button>

            <!-- Tombol Kembali -->
            <a href="{{ route('admin.resellers.index') }}" class="btn btn-outline-secondary" style="border-radius: 50px; padding: 10px 20px; transition: all 0.3s ease;">
                <i class="fas fa-arrow-left me-2"></i> Kembali
            </a>
        </div>
    </form>
</div>
@endsection

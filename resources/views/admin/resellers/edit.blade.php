@extends('layouts.admin')

@section('content')


<div class="container mt-1 pt-1">
    <h2 class="mb-4 text-center text-primary">Edit Partners</h2>

    <form action="{{ route('resellers.update', $reseller->id) }}" method="POST" class="p-4 shadow-lg rounded bg-white">
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

        <!-- Kode Pos -->
        <div class="mb-3">
            <label for="kodepos" class="form-label">Kode Pos</label>
            <input type="text" class="form-control" id="kodepos" name="kodepos" value="{{ $reseller->kodepos }}" required>
        </div>

        <!-- Nomor Telepon -->
        <div class="mb-3">
            <label for="phone" class="form-label">No Telepon</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $reseller->phone }}">
        </div>

        <div class="mb-3">
            <label for="instagram" class="form-label">Instagram</label>
            <input type="text" class="form-control" id="instagram" name="instagram" value="{{ $reseller->instagram }}" required>
        </div>
        <!-- Tombol Simpan -->
        <div class="d-grid">
            <button type="submit" class="btn" style="background: linear-gradient(to right, #ff0000, #ffcc00); color: white; border-radius: 50px; padding: 10px 20px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1); transition: all 0.3s ease;">
                <i class="fas fa-save me-2"></i> Simpan
            </button>
        </div>
    </form>
</div>

@endsection
<style>
    .btn:hover {
        background: linear-gradient(to right, #ffcc00, #ff0000); /* Membalik gradien saat hover */
        transform: scale(1.05); /* Efek memperbesar tombol saat hover */
        box-shadow: 0 6px 10px rgba(0, 0, 0, 0.2); /* Efek bayangan lebih besar saat hover */
    }
</style>
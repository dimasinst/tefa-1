@extends('layouts.admin')

@section('content')
<div class="container mt-1 pt-1">
    <h2 class="mb-4 text-center text-primary">Edit Partners</h2>

    <form action="{{ route('admin.resellers.update', $reseller->id) }}" method="POST" class="p-4 shadow-lg rounded bg-white">
        @csrf
        @method('PUT')

        <!-- Grid Layout -->
        <div class="row g-3">
            <!-- Nama Reseller -->
            <div class="col-md-6">
                <label for="name" class="form-label">Nama Partners</label>
                <input type="text" class="form-control rounded-pill" id="name" name="name" value="{{ $reseller->name }}" required>
            </div>

            <!-- Provinsi -->
            <div class="col-md-6">
                <label for="province" class="form-label">Provinsi</label>
                <input type="text" class="form-control rounded-pill" id="province" name="province" value="{{ $reseller->province }}" required>
            </div>

            <!-- Kota -->
            <div class="col-md-6">
                <label for="city" class="form-label">Kota</label>
                <input type="text" class="form-control rounded-pill" id="city" name="city" value="{{ $reseller->city }}" required>
            </div>

            <!-- Alamat Lengkap -->
            

            <!-- Nomor Telepon -->
            <div class="col-md-6">
                <label for="phone" class="form-label">No Telepon</label>
                <input type="text" class="form-control rounded-pill" id="phone" name="phone" value="{{ $reseller->phone }}">
            </div>

            <!-- Instagram -->
            <div class="col-md-6">
                <label for="instagram" class="form-label">Instagram</label>
                <input type="text" class="form-control rounded-pill" id="instagram" name="instagram" value="{{ $reseller->instagram }}" required>
            </div>

            <div class="col-md-6">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <input type="text" class="form-control rounded-pill" rows="2" id="alamat" name="alamat" value="{{ $reseller->alamat }}" required>
            </div>
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

<style>
    body {
        background-color: #f4f6f9;
        font-family: 'Arial', sans-serif;
    }

    .form-label {
        font-weight: bold;
        color: #333;
    }

    .form-control {
        border: 1px solid #ddd;
        padding: 10px;
        transition: box-shadow 0.3s ease;
    }

    .form-control:focus {
        border-color: #ffcc00;
        box-shadow: 0 0 10px rgba(255, 204, 0, 0.5);
    }

    .btn {
        font-size: 14px;
    }

    .btn:hover {
        transform: scale(1.05);
    }

    @media (max-width: 768px) {
        .form-control {
            font-size: 14px;
        }

        textarea {
            height: auto;
        }
    }
</style>
@endsection

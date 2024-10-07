@extends('layouts.app') <!-- Pastikan Anda memiliki layout utama -->
@section('content')
<head> 
    @include('components.head')
</head>
<body>

@include('admin.navbar')

    <form action="{{ route('resellers.store') }}" method="POST" class="p-4 rounded shadow-lg bg-white">
    @csrf
    <h3 class="text-center mb-4 text-primary mt-5 pt-4">Tambah Partners Baru</h3>
    <div class="row mb-3">
        <div class="col-md-6">
            <label for="name" class="form-label fw-bold">Nama Partners</label>
            <input type="text" name="name" required class="form-control" placeholder="Masukkan nama reseller">
        </div>
        <div class="col-md-6">
            <label for="phone" class="form-label fw-bold">Telepon</label>
            <input type="text" name="phone" required class="form-control" placeholder="Masukkan nomor telepon">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-6">
            <label for="province" class="form-label fw-bold">Provinsi</label>
            <input type="text" name="province" required class="form-control" placeholder="Masukkan provinsi">
        </div>
        <div class="col-md-6">
            <label for="city" class="form-label fw-bold">Kota</label>
            <input type="text" name="city" required class="form-control" placeholder="Masukkan kota">
        </div>
    </div>

    <div class="row mb-3">
        <div class="col-md-8">
            <label for="alamat" class="form-label fw-bold">Alamat</label>
            <input type="text" name="alamat" required class="form-control" placeholder="Masukkan alamat lengkap">
        </div>
        <div class="col-md-4">
            <label for="kodepos" class="form-label fw-bold">Kode Pos</label>
            <input type="text" name="kodepos" required class="form-control" placeholder="Masukkan kode pos">
        </div>
    </div>

    <div class="d-grid">
        <button type="submit" class="btn btn-primary btn-lg d-flex align-items-center justify-content-center">
            <i class="fas fa-save me-2"></i> Simpan 
        </button>
    </div>
</form>
</body>
@endsection
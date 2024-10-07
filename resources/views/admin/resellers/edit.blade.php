@extends('layouts.app')

@section('content')
@include('admin.navbar')

<div class="container mt-5 pt-4">
    
    <h2>Edit Partners</h2>

    <form action="{{ route('resellers.update', $reseller->id) }}" method="POST">
    @csrf
    @method('PUT') <!-- Method PUT untuk update data -->

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

        <!-- Tombol Simpan -->
        <button type="submit" class="btn btn-primary">Simpan</button>
        <a href="{{ route('resellers.index') }}" class="btn btn-secondary">Batal</a>
    </form>
</div>
@endsection

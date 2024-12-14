@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-start mb-4">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-dark btn-lg">
            <i class="bi bi-arrow-left-circle"></i> Kembali ke Dashboard
        </a>
    </div>

    <div class="container mt-5">
        <h1 class="mb-4">Edit Profil</h1>

        @if(session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif

        <!-- Form Edit Profil -->
        <form action="{{ route('admin.profile.update') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" name="email" id="email" class="form-control" value="{{ old('email', $profile->email) }}" required>
                @error('email')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Instagram URL</label>
                <input type="url" name="instagram" id="instagram" class="form-control" value="{{ old('instagram', $profile->instagram) }}" required>
                @error('instagram')
                    <div class="text-danger">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="btn btn-success">Simpan Perubahan</button>
        </form>
    </div>
</div>

@endsection

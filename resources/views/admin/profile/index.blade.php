@extends('layouts.admin')

@section('content')

<div class="container mt-5">
    <div class="d-flex justify-content-start mb-4">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-dark btn-lg">
            <i class="bi bi-arrow-left-circle"></i> Kembali ke Dashboard
        </a>
    </div>
    <div class="container mt-5">
        <h1 class="mb-4">Kelola Profile</h1>

        <!-- Tabel daftar profil -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Email</th>
                    <th>Instagram</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($profiles as $profile)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $profile->email }}</td>
                    <td>
                        <a href="{{ $profile->instagram }}" target="_blank">{{ $profile->instagram }}</a>
                    </td>
                    <td>
                        <a href="{{ route('admin.profile.edit', $profile->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center">Belum ada data profil.</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>

@endsection

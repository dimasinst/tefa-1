@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Kelola Testimoni</h1>

    <!-- Tombol untuk menambahkan testimoni baru -->
    <a href="{{ route('admin.testimoni.create') }}" class="btn btn-primary mb-4">
        Tambah Testimoni
    </a>

    <!-- Tabel daftar testimoni -->
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>#</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($testimoni as $testimonial)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>
                    <img src="{{ asset('storage/' . $testimonial->image) }}" alt="Gambar Testimoni" style="width: 100px; height: auto;">
                </td>
                <td>
                    <a href="{{ route('admin.testimoni.edit', $testimonial->id) }}" class="btn btn-warning btn-sm">Edit</a>
                    <form action="{{ route('admin.testimoni.destroy', $testimonial->id) }}" method="POST" style="display: inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus testimoni ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="3" class="text-center">Belum ada testimoni.</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection

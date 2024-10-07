@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5"> <!-- Tambahkan kelas mt-5 pt-5 -->
    <h2>Daftar Partners kami</h2>
    <p class="alert alert-info">
    Jika Anda ingin membeli barang, silakan hubungi Partners berikut ini untuk informasi lebih lanjut.
</p>

    <table class="table">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resellers as $reseller)
            <tr>
                <td>{{ $reseller->name }}</td>
                <td>{{ $reseller->province }}</td>
                <td>{{ $reseller->city }}</td>
                <td>
                    <!-- Tombol Detail -->
                    <a href="{{ route('user.resellers.show', $reseller->id) }}" class="btn btn-info btn-sm">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

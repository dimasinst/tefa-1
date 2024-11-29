@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h2 class="text-center text-danger mb-4">Daftar Partners Kami</h2>
    <p class="alert alert-warning text-center">
        Jika Anda ingin membeli barang, silakan hubungi Partners berikut ini untuk informasi lebih lanjut.
    </p>

    <!-- Input Pencarian -->
    <div class="mb-4">
        <input type="text" id="searchInput" class="form-control border-warning" placeholder="Cari berdasarkan Nama, Provinsi, atau Kota" onkeyup="searchResellers()" style="border-radius: 25px; padding: 12px 20px; font-size: 16px; border-color: #f39c12;">
    </div>

    <!-- Tabel Partners -->
    <table class="table table-striped table-hover" id="resellerTable">
        <thead class="bg-danger text-white">
            <tr>
                <th>Nama</th>
                <th>Provinsi</th>
                <th>Kota</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($resellers as $reseller)
            <tr class="reseller-item">
                <td>{{ $reseller->name }}</td>
                <td>{{ $reseller->province }}</td>
                <td>{{ $reseller->city }}</td>
                <td>
                    <!-- Tombol Detail -->
                    <a href="{{ route('reseller.show', $reseller->id) }}" class="btn btn-warning btn-sm rounded-pill px-4 py-2">Detail</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>

<script>
    function searchResellers() {
        const input = document.getElementById('searchInput').value.toLowerCase();
        const resellerItems = document.querySelectorAll('#resellerTable .reseller-item');

        // Loop melalui semua item reseller dan sembunyikan jika tidak sesuai
        resellerItems.forEach((item) => {
            const name = item.cells[0].innerText.toLowerCase();
            const province = item.cells[1].innerText.toLowerCase();
            const city = item.cells[2].innerText.toLowerCase();
            
            // Cek apakah input cocok dengan nama, provinsi, atau kota
            if (name.includes(input) || province.includes(input) || city.includes(input)) {
                item.style.display = ''; // Tampilkan item
            } else {
                item.style.display = 'none'; // Sembunyikan item
            }
        });
    }
</script>

@endsection

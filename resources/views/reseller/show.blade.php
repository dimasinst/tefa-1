@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card shadow-sm border-0 p-4 mx-auto reseller-card">
        <!-- Membuat tabel menjadi responsif di layar kecil -->
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Detail Reseller</th>
                        <th class="text-center">Informasi</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td><strong>Nama Reseller</strong></td>
                        <td><strong>{{ $reseller->name }}</strong></td>
                    </tr>
                    <tr>
                        <td>Provinsi</td>
                        <td>{{ $reseller->province }}</td>
                    </tr>
                    <tr>
                        <td>Kota</td>
                        <td>{{ $reseller->city }}</td>
                    </tr>
                    <tr>
                        <td>Alamat</td>
                        <td class="word-wrap">{{ $reseller->alamat }}</td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>
                            <a href="https://wa.me/{{ $reseller->phone }}" target="_blank" class="detail-link">{{ $reseller->phone }}</a>
                        </td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>
                            <a href="https://www.instagram.com/{{ $reseller->instagram }}" target="_blank" class="detail-link">{{ $reseller->instagram }}</a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="text-center mt-4">
            <a href="{{ route('reseller.index') }}" class="btn btn">Kembali</a>
        </div>
    </div>
</div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #fafafa;
    }

    /* Card Styling */
    .reseller-card {
        max-width: 800px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    /* Table Styling */
    .table th, .table td {
        text-align: left;
        padding: 12px;
        font-weight: bold;
        font-size: 1.1rem;
    }

    .table th {
        background-color: #007bff;
        color: white;
    }

    .table td {
        color: #555;
    }

    /* Membuat alamat bisa terbungkus jika terlalu panjang */
    .word-wrap {
        word-wrap: break-word;
        overflow-wrap: break-word;
        max-width: 200px;
    }

    /* Link Styling */
    .detail-link {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .detail-link:hover {
        color: #0056b3;
    }

    /* Button Styling */
    .btn {
        width: 100%;
        padding: 12px;
        border-radius: 8px;
        background: linear-gradient(45deg, #f39c12, #e67e22);
        border: none;
        color: #fff;
        font-weight: bold;
        text-transform: uppercase;
        font-size: 1.1rem;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .btn:hover {
        background: linear-gradient(45deg, #f1c40f, #e74c3c);
        transform: translateY(-3px);
        box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .reseller-card {
            padding: 16px;
        }

        .table th, .table td {
            font-size: 1rem;
            padding: 8px;
        }

        /* Mengurangi ukuran teks di layar kecil */
        .word-wrap {
            max-width: 150px;
            font-size: 0.9rem;
        }

        .btn {
            padding: 8px 16px;
        }
    }
</style>

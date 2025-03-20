@extends('layouts.admin')

@section('content')
<div class="container mt-5 pt-5">
    <div class="card shadow-sm border-0 p-4 mx-auto reseller-card">
        <h3 class="text-center reseller-title">Detail Reseller</h3>

        <!-- Untuk Desktop: Tabel -->
        <div class="table-responsive d-none d-md-block">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th class="text-center">Detail</th>
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
                        <td><span class="alamat">{{ $reseller->alamat }}</span></td>
                    </tr>
                    <tr>
                        <td>Telepon</td>
                        <td>
                            <a href="https://wa.me/{{ $reseller->phone }}" target="_blank" class="detail-link">
                                {{ $reseller->phone }}
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td>Instagram</td>
                        <td>
                            <a href="https://www.instagram.com/{{ $reseller->instagram }}" target="_blank" class="detail-link">
                                {{ $reseller->instagram }}
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!-- Untuk Mobile: Card View -->
        <div class="d-block d-md-none">
            <div class="reseller-info">
                <div><strong>Nama Reseller:</strong> <span>{{ $reseller->name }}</span></div>
                <div><strong>Provinsi:</strong> <span>{{ $reseller->province }}</span></div>
                <div><strong>Kota:</strong> <span>{{ $reseller->city }}</span></div>
                <div><strong>Alamat:</strong> <span class="alamat">{{ $reseller->alamat }}</span></div>
                <div><strong>Telepon:</strong> 
                    <a href="https://wa.me/{{ $reseller->phone }}" target="_blank" class="detail-link">
                        {{ $reseller->phone }}
                    </a>
                </div>
                <div><strong>Instagram:</strong> 
                    <a href="https://www.instagram.com/{{ $reseller->instagram }}" target="_blank" class="detail-link">
                        {{ $reseller->instagram }}
                    </a>
                </div>
            </div>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('admin.resellers.index') }}" class="btn">Kembali</a>
        </div>
    </div>
</div>
@endsection

<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');

    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
    }

    .reseller-title {
        font-size: 1.75rem;
        font-weight: 600;
        color: #333;
        letter-spacing: 1px;
    }

    .reseller-card {
        max-width: 800px;
        border-radius: 10px;
        background-color: #fff;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .table th, .table td {
        text-align: left;
        padding: 12px;
        font-weight: bold;
        font-size: 1rem;
        min-width: 150px;
    }

    .table th {
        background-color: #007bff;
        color: white;
    }

    .table td {
        color: #555;
    }

    /* Tampilan Mobile */
    .reseller-info {
        background: #fff;
        padding: 15px;
        border-radius: 10px;
        box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
    }

    .reseller-info div {
        padding: 10px 0;
        border-bottom: 1px solid #ddd;
    }

    .reseller-info div:last-child {
        border-bottom: none;
    }

    .alamat {
        display: block;
        max-width: 100%;
        white-space: normal;
        word-wrap: break-word;
        overflow-wrap: break-word;
    }

    .detail-link {
        color: #007bff;
        text-decoration: none;
        font-weight: 500;
        transition: color 0.3s ease;
    }

    .detail-link:hover {
        color: #0056b3;
    }

    .btn {
        background: linear-gradient(135deg, #ff5e5e, #ff9f1c);
        color: #fff;
        border: none;
        border-radius: 6px;
        padding: 10px 20px;
        font-size: 0.9rem;
        font-weight: 500;
        transition: background-color 0.3s ease, transform 0.2s ease;
    }

    .btn:hover {
        background: linear-gradient(135deg, #ff9f1c, #ff5e5e);
        transform: translateY(-2px);
    }

    /* Responsiveness */
    @media (max-width: 768px) {
        .table {
            display: none; /* Hilangkan tabel di mobile */
        }

        .reseller-info {
            display: block;
        }

        .alamat {
            max-width: 100%;
            white-space: normal;
            word-wrap: break-word;
            overflow-wrap: break-word;
        }
    }
</style>

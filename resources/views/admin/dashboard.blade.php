@extends('layouts.admin')

@section('content')
<div class="container">
    <!-- Header -->
    <div class="text-center">
        <h1 class="display-4 text-primary font-weight-bold" style="font-family: 'Poppins', sans-serif;">Admin Dashboard</h1>
        <p class="lead text-muted">Selamat datang, Admin! Pilih tindakan yang ingin Anda lakukan:</p>
    </div>

    <!-- Tombol Logout -->
    <div class="d-flex justify-content-end mb-4">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button class="btn btn-danger shadow-lg px-4 py-2" type="submit" style="transition: all 0.3s ease;">
                <i class="fas fa-sign-out-alt"></i> Logout
            </button>
        </form>
    </div>

    <!-- Section Cards -->
    <div class="row row-cols-1 row-cols-md-2 g-4">
        <!-- Card Reseller -->
        <div class="col">
            <div class="card custom-card shadow rounded-4">
                <div class="card-body text-center">
                    <i class="fas fa-users fa-4x text-primary mb-3"></i>
                    <h5 class="card-title text-dark font-weight-bold">Kelola Reseller</h5>
                    <a href="{{ route('admin.resellers.index') }}" class="btn custom-btn btn-primary">Pergi ke Reseller</a>
                </div>
            </div>
        </div>

        <!-- Card Product -->
        <div class="col">
            <div class="card custom-card shadow rounded-4">
                <div class="card-body text-center">
                    <i class="fas fa-cogs fa-4x text-success mb-3"></i>
                    <h5 class="card-title text-dark font-weight-bold">Kelola Produk</h5>
                    <a href="{{ route('admin.products.index') }}" class="btn custom-btn btn-success">Pergi ke Produk</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Card Testimoni -->
    <div class="col mt-4">
        <div class="card custom-card shadow rounded-4">
            <div class="card-body text-center">
                <i class="fas fa-comments fa-4x text-info mb-3"></i>
                <h5 class="card-title text-dark font-weight-bold">Kelola Testimoni</h5>
                <a href="{{ route('admin.testimoni.index') }}" class="btn custom-btn btn-info">Pergi ke Testimoni</a>
            </div>
        </div>
    </div>

    <div class="col mt-4">
        <div class="card custom-card shadow rounded-4">
            <div class="card-body text-center">
                <i class="fas fa-comments fa-4x text-info mb-3"></i>
                <h5 class="card-title text-dark font-weight-bold">Kelola profile</h5>
                <a href="{{ route('admin.profile.index') }}" class="btn custom-btn btn-info">Pergi ke profile</a>
            </div>
        </div>
    </div>


</div>

<!-- Styling CSS -->
<style>
    /* Layout untuk container */
    .container {
        max-width: 1100px;
    }

    /* Styling untuk Card */
    .card {
        border-radius: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
        overflow: hidden;
    }

    .card:hover {
        transform: translateY(-10px);
        box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
    }

    /* Styling Card */
    .custom-card {
        background-color: #ffffff;
    }

    .card-body {
        padding: 40px;
        background-color: #f9f9f9;
    }

    /* Teks pada Card */
    .card-title {
        font-size: 1.6rem;
        font-weight: bold;
        color: #343a40;
    }


    /* Tombol */
    .custom-btn {
        font-size: 1.2rem;
        padding: 15px;
        text-transform: uppercase;
        border-radius: 50px;
        width: 100%;
        font-weight: 600;
        letter-spacing: 1px;
        transition: transform 0.2s ease, box-shadow 0.2s ease;
    }

    .custom-btn:hover {
        transform: translateY(-5px);
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    /* Tombol Warna */
    .btn-primary {
        background: linear-gradient(45deg, #007bff, #0056b3);
        border: none;
        color: #fff;
    }

    .btn-primary:hover {
        background: linear-gradient(45deg, #0056b3, #004494);
    }

    .btn-success {
        background: linear-gradient(45deg, #28a745, #218838);
        border: none;
        color: #fff;
    }

    .btn-success:hover {
        background: linear-gradient(45deg, #218838, #1e7e34);
    }

    .btn-danger {
        background: linear-gradient(45deg, #dc3545, #c82333);
        border: none;
        color: #fff;
    }

    .btn-danger:hover {
        background: linear-gradient(45deg, #c82333, #bd2130);
    }

    /* Responsif */
    @media (max-width: 768px) {
        .card-body {
            padding: 30px;
        }

        .custom-btn {
            font-size: 1rem;
        }
    }
</style>
@endsection

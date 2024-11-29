<head> 
    @include('components.head') 
    <style>
        /* Styling untuk halaman reseller */
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
            color: #333;
        }

        .container {
            margin-top: 50px;
        }

        h3 {
            font-size: 2rem;
            color: #2c3e50;
            font-weight: 600;
            margin-bottom: 30px;
            text-align: center;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control {
            border-radius: 10px;
            padding: 15px;
            background-color: #f9f9f9;
            border: 1px solid #ddd;
        }

        .form-control:focus {
            border-color: #fbbd00;
            box-shadow: 0 0 5px rgba(255, 189, 0, 0.8);
        }

        .form-select {
            border-radius: 10px;
            padding: 15px;
            background-color: #f9f9f9;
        }

        .mb-3 {
            margin-bottom: 1.5rem;
        }

        .btn {
            background: linear-gradient(45deg, #ff5722, #fbbd00); /* Gradasi warna merah dan kuning */
            border-color: #ff5722;
            border-radius: 50px;
            padding: 12px 20px;
            font-size: 16px;
            transition: background-color 0.3s ease, transform 0.3s ease;
            width: 100%;
        }

        .btn:hover {
            background: linear-gradient(45deg, #f44336, #ffc107); /* Gradasi lebih cerah saat hover */
            border-color: #f44336;
            transform: scale(1.05); /* Efek zoom saat hover */
        }

        .d-grid {
            margin-top: 20px;
        }

        .row {
            margin-bottom: 1.5rem;
        }

        .row .col-md-6 {
            padding: 0 15px;
        }

        .row .col-md-8,
        .row .col-md-4 {
            padding: 0 15px;
        }

        /* Styling untuk ikon tombol */
        .btn i {
            font-size: 18px;
        }

        /* Menambahkan margin di sekitar form */
        .form-wrapper {
            max-width: 900px;
            margin: 0 auto;
            background-color: #ffffff;
            padding: 30px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
    @extends('layouts.admin') <!-- Menambahkan extends layout admin -->

    @section('content') <!-- Menambahkan section content -->
    <div class="container">
        <div class="form-wrapper">
            <form action="{{ route('resellers.store') }}" method="POST">
                @csrf
                <h3>Tambah Partners Baru</h3>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="name" class="form-label">Nama Partners</label>
                        <input type="text" name="name" required class="form-control" placeholder="Masukkan nama reseller">
                    </div>
                    <div class="col-md-6">
                        <label for="phone" class="form-label">Telepon</label>
                        <input type="text" name="phone" required class="form-control" placeholder="Masukkan nomor telepon">
                    </div>
                    <div class="col-md-6">
                        <label for="instagram" class="form-label">instagram</label>
                        <input type="text" name="instagram" required class="form-control" placeholder="Masukkan provinsi">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-6">
                        <label for="province" class="form-label">Provinsi</label>
                        <input type="text" name="province" required class="form-control" placeholder="Masukkan provinsi">
                    </div>
                    <div class="col-md-6">
                        <label for="city" class="form-label">Kota</label>
                        <input type="text" name="city" required class="form-control" placeholder="Masukkan kota">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-md-8">
                        <label for="alamat" class="form-label">Alamat</label>
                        <input type="text" name="alamat" required class="form-control" placeholder="Masukkan alamat lengkap">
                    </div>
                    <div class="col-md-4">
                        <label for="kodepos" class="form-label">Kode Pos</label>
                        <input type="text" name="kodepos" required class="form-control" placeholder="Masukkan kode pos">
                    </div>
                </div>


                <div class="d-grid">
                    <button type="submit" class="btn btn-lg">
                        <i class="fas fa-save me-2"></i> Simpan 
                    </button>
                </div>
            </form>
        </div>
    </div>
    @endsection <!-- Mengakhiri section content -->
</body>

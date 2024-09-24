<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Menggunakan font Google Fonts untuk tampilan yang lebih baik */
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            background: linear-gradient(to right, #f8f9fa, #e9ecef);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif; /* Menggunakan font Roboto */
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            background-color: #dc3545; /* Warna latar belakang merah */
        }
        .card-header h4 {
            font-weight: 500; /* Berat font sedang */
        }
        .form-control, .btn {
            border-radius: 10px;
            font-size: 16px; /* Ukuran font yang lebih besar untuk input dan tombol */
        }
        .btn-warning {
            background-color: #ffc107;
            border-color: #ffc107;
            padding: 10px 20px; /* Padding yang lebih nyaman */
            font-size: 16px; /* Ukuran font yang nyaman */
            font-weight: 500; /* Berat font tombol */
        }
        .btn-warning:hover {
            background-color: #e0a800;
            border-color: #d39e00;
            transform: scale(1.05);
            transition: background-color 0.3s ease, transform 0.3s ease;
        }
        /* Media Query untuk Perangkat Mobile */
        @media (max-width: 768px) {
            .btn-warning {
                padding: 12px 24px; /* Padding lebih besar untuk mobile */
                font-size: 18px; /* Ukuran font lebih besar di mobile */
            }
        }
        /* Media Query untuk Perangkat Desktop */
        @media (min-width: 769px) {
            .btn-warning {
                padding: 10px 20px; /* Padding lebih kecil untuk desktop */
                font-size: 16px; /* Ukuran font lebih kecil di desktop */
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header text-white text-center">
                    <h4 class="mb-0">Admin</h4>
                </div>
                <div class="card-body">
                    @if (session('error'))
                    <div class="alert alert-danger">
                        {{ session('$message') }}
                    </div>
                @endif
                    <form action="{{ route ("login-proses") }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="USN" class="form-label">Username</label>
                            <input type="USN" name="USN" class="form-control" id="USN" placeholder="Masukkan Username Anda" >
                            @error('USN')
                            <small>username anda tidak boleh kosong</small>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" name="password"  class="form-control" id="password" placeholder="Masukkan kata sandi Anda" >
                            @error('password')
                            <small>password anda tidak boleh kosong</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('failed'))
<Script>Swal.fire("{{ $message }}");</Script>
@endif
</body>
</html>

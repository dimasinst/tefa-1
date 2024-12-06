<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTN SPRING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap');

        body {
            background: linear-gradient(to right, #ff4d4d, #ffaf00);
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            font-family: 'Roboto', sans-serif;
            color: #333;
        }
        .card {
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.15);
            transition: transform 0.3s ease;
        }
        .card:hover {
            transform: scale(1.02);
        }
        .card-header {
            background-color: #ff6600;
            color: #fff;
            padding: 20px;
            text-align: center;
        }
        .card-header h4 {
            font-weight: 500;
            margin: 0;
        }
        .card-body {
            padding: 30px;
            background-color: #f8f9fa;
        }
        .form-control, .btn {
            border-radius: 10px;
            font-size: 16px;
        }
        .btn-warning {
            background-color: #ffaf00;
            border: none;
            font-weight: 500;
            color: #fff;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }
        .btn-warning:hover {
            background-color: #ff9900;
            transform: scale(1.05);
        }
        .btn-danger {
            background-color: #dc3545;
            color: #fff;
            border: none;
            margin-top: 10px;
        }
        .btn-danger:hover {
            background-color: #c82333;
            transform: scale(1.05);
        }
        .form-label {
            font-weight: bold;
            color: #555;
        }
        /* Responsive styling */
        @media (max-width: 768px) {
            .btn-warning {
                padding: 12px 24px;
                font-size: 18px;
            }
        }
    </style>
</head>
<body>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header">
                    <h4 class="mb-0">Login Admin</h4>
                </div>
                <div class="card-body">
                    @if (session('failed'))
                    <div class="alert alert-danger">
                        {{ session('failed') }}
                    </div>
                    @endif
                    <form action="{{ route('auth.authenticate') }}" method="POST">
                        @csrf
                        <div class="mb-4">
                            <label for="USN" class="form-label">Username</label>
                            <input type="text" name="USN" class="form-control" id="USN" placeholder="Masukkan Username Anda" >
                            @error('USN')
                            <small class="text-danger">Username Anda tidak boleh kosong</small>
                            @enderror
                        </div>

                        <div class="mb-4">
                            <label for="password" class="form-label">Kata Sandi</label>
                            <input type="password" name="password" class="form-control" id="password" placeholder="Masukkan kata sandi Anda" >
                            @error('password')
                            <small class="text-danger">Password Anda tidak boleh kosong</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-warning w-100">Login</button>
                    </form>
                    <a href="{{ route('home') }}" class="btn btn-danger w-100 mt-3">Kembali ke Home</a>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if ($message = Session::get('failed'))
<script>
    Swal.fire({
        icon: 'error',
        title: 'Gagal Login',
        text: "{{ $message }}",
        showConfirmButton: true,
        confirmButtonColor: '#ff6600'
    });
</script>
@endif

</body>
</html>

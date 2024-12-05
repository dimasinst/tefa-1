<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            background-color: #f7f8f9;
            margin: 0;
            padding: 0;
        }

        .inquiry-section {
            background-color: #2c3e50;
            color: #fff;
            padding: 100px 0;
            text-align: center;
        }

        .inquiry-section h2 {
            font-size: 3rem;
            color: #fff;
            margin-bottom: 20px;
            font-weight: 700;
            text-transform: uppercase;
        }

        .inquiry-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
            color: #ddd;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .contact-item {
            background-color: #34495e;
            color: #ecf0f1;
            border-radius: 8px;
            padding: 15px;
            width: 120px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background-color: #3498db;
            color: #fff;
        }

        .contact-item i {
            font-size: 2.2rem;
        }

        .form-wrapper {
            max-width: 900px;
            margin: 50px auto;
            padding: 30px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }

        .form-label {
            font-weight: bold;
        }

        .form-control {
            padding: 10px;
            border-radius: 5px;
        }

        .btn {
            width: 100%;
            padding: 10px;
            border-radius: 5px;
            background: linear-gradient(45deg, #ff5722, #fbbd00);
            border: none;
            color: #fff;
        }

        .btn:hover {
            background: linear-gradient(45deg, #f44336, #ffc107);
        }

        @media (max-width: 768px) {
            .inquiry-section h2 {
                font-size: 2.5rem;
            }

            .inquiry-section p {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <!-- Inquiry Section -->
    <section class="inquiry-section" id="inquiry">
        <h2>Hubungi Kami</h2>
        <p>Untuk informasi lebih lanjut, hubungi kami melalui platform berikut.</p>
        <div class="contact-info">
            <div class="contact-item">
                <a href="https://instagram.com/yourusername" target="_blank" class="text-decoration-none text-white">
                    <i class="bi bi-instagram"></i>
                    <p>Instagram</p>
                </a>
            </div>
            <div class="contact-item">
                <a href="mailto:your-email@example.com" class="text-decoration-none text-white">
                    <i class="bi bi-envelope"></i>
                    <p>Email</p>
                </a>
            </div>
        </div>
    </section>

    <!-- Form Reseller -->
    <div class="form-wrapper">
        <h3 class="text-center">Ajukan Menjadi Rekanan</h3>
        <form action="{{ route('resellers.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Masukkan nomor telepon" required>
            </div>
            <div class="mb-3">
                <label for="province" class="form-label">Provinsi</label>
                <input type="text" id="province" name="province" class="form-control" placeholder="Masukkan provinsi" required>
            </div>
            <div class="mb-3">
                <label for="city" class="form-label">Kota</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Masukkan kota" required>
            </div>
            <div class="mb-3">
                <label for="instagram" class="form-label">Akun Instagram</label>
                <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Masukkan akun Instagram" required>
            </div>
            <div class="mb-3">
  <label for="alamat" class="form-label">Alamat Lengkap</label>
  <textarea id="alamat" name="alamat" class="form-control" placeholder="Masukkan alamat lengkap" rows="4" required></textarea>
</div>

            <button type="submit" class="btn">Ajukan</button>
        </form>
    </div>

    @include('components.footer')

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true });
    </script>
</body>

</html>

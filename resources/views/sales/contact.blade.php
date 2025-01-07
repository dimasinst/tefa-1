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
            margin: 0;
            padding: 0;
            background-color: #f7f8f9;
        }

        /* Section Title */
        .section-title {
            text-align: center;
            margin-bottom: 60px;
        }

        .section-title h2 {
            font-size: 3rem;
            font-weight: 700;
            color: #4b4b4b;
            text-transform: uppercase;
            letter-spacing: 2px;
            margin-bottom: 20px;
        }

        .section-title p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 40px;
        }

        /* Inquiry Section */
        .inquiry-section {
            background: linear-gradient(135deg, #8e9eab, #c0d6df); /* Kalem, gradasi biru pastel */
            color: #fff;
            padding: 80px 0;
            position: relative;
            overflow: hidden;
        }

        .contact-info {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
        }

        .contact-item {
            background: #34495e;
            color: #ecf0f1;
            border-radius: 10px;
            padding: 20px;
            width: 200px;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .contact-item:hover {
            transform: translateY(-5px);
            background: #2ecc71;
            color: #fff;
        }

        .contact-item i {
            font-size: 2.5rem;
            margin-bottom: 10px;
        }

        /* Form Wrapper */
        .form-wrapper {
            max-width: 900px;
            margin: 50px auto;
            padding: 40px;
            background-color: #ffffff;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease-in-out;
        }

        .form-wrapper:hover {
            transform: scale(1.02);
        }

        .form-wrapper h3 {
            font-size: 2rem;
            font-weight: bold;
            color: #4b4b4b;
            text-align: center;
            margin-bottom: 30px;
        }

        .form-label {
            font-weight: bold;
            color: #2c3e50;
        }

        .form-control {
            padding: 12px;
            border-radius: 8px;
            border: 1px solid #ddd;
            margin-bottom: 20px;
            font-size: 1rem;
            width: 100%;
            transition: border 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff7e5f;
            box-shadow: 0 0 5px rgba(255, 126, 95, 0.5);
        }

        .form-control::placeholder {
            color: #bbb;
        }

        .form-text {
            font-size: 0.9rem;
            color: #888;
        }

        .btn-submit {
            width: 100%;
            padding: 12px;
            border-radius: 8px;
            background: linear-gradient(45deg, #f39c12, #e67e22); /* Kalem gradasi oranye */
            border: none;
            color: #fff;
            font-weight: bold;
            text-transform: uppercase;
            font-size: 1.1rem;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .btn-submit:hover {
            background: linear-gradient(45deg, #f1c40f, #e74c3c); /* Hover dengan gradasi cerah */
            transform: translateY(-3px);
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.2);
        }

        .form-wrapper .form-group {
            position: relative;
        }

        /* Media Queries for Responsiveness */
        @media (max-width: 768px) {
            .section-title h2 {
                font-size: 2.5rem;
            }

            .section-title p {
                font-size: 1rem;
            }

            .form-wrapper {
                padding: 20px;
            }

            .form-wrapper h3 {
                font-size: 1.6rem;
            }

            .contact-info {
                display: block;
            }

            .contact-item {
                width: 100%;
                margin-bottom: 15px;
            }
        }

    </style>
</head>

<body>
    @include('components.navbar')

    <!-- Inquiry Section -->
    <section class="inquiry-section" id="inquiry">
        <div class="container">
            <div class="section-title">
                <h2>Gabung Menjadi Reseller Kami</h2>
                <p>Ajukan sekarang dan dapatkan peluang bisnis menarik dengan kami!</p>
            </div>

            <div class="contact-info" data-aos="fade-up">
                <div class="contact-item">
                    <a href="https://www.instagram.com/mtnspring_japan.official/" target="_blank" class="text-decoration-none text-white">
                        <i class="bi bi-instagram"></i>
                        <p>Instagram</p>
                    </a>
                </div>
                <div class="contact-item">
                    <a href="mailto:support@mtnspring.com" class="text-decoration-none text-white">
                        <i class="bi bi-envelope"></i>
                        <p>Email</p>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Reseller Form Section -->
    <div class="form-wrapper" data-aos="zoom-in">
        <h3>Formulir Pendaftaran Reseller</h3>
        <form action="{{ route('resellers.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Nama Lengkap</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama lengkap" required>
            </div>

            <div class="form-group">
                <label for="phone" class="form-label">Nomor Telepon</label>
                <input type="text" id="phone" name="phone" class="form-control" placeholder="Masukkan nomor telepon" required>
            </div>

            <div class="form-group">
                <label for="province" class="form-label">Provinsi</label>
                <select id="province" name="province" class="form-control" required>
                    <option value="" disabled selected>Pilih Provinsi</option>
                    @foreach($provinces as $province)
                        <option value="{{ $province->province }}">{{ $province->province }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="city" class="form-label">Kota</label>
                <input type="text" id="city" name="city" class="form-control" placeholder="Masukkan kota" required>
            </div>

            <div class="form-group">
                <label for="instagram" class="form-label">Akun Instagram</label>
                <input type="text" id="instagram" name="instagram" class="form-control" placeholder="Masukkan akun Instagram" required>
            </div>

            <div class="form-group">
                <label for="alamat" class="form-label">Alamat Lengkap</label>
                <textarea id="alamat" name="alamat" class="form-control" placeholder="Masukkan alamat lengkap" rows="4" required></textarea>
            </div>

            <button type="submit" class="btn-submit">Ajukan Menjadi Reseller</button>
        </form>
    </div>

    @include('components.footer', ['profile' => $profile])

    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({ once: true });
    </script>
</body>

</html>

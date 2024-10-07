<!DOCTYPE html>
<html lang="id">
<head>
    @include('components.head')
    <style>
        body {
            background-color: #f8f9fa;
        }
        .contact-card {
            background-color: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 30px;
            margin-top: 80px; /* Jarak atas dari navbar */
            text-align: center; /* Rata tengah untuk konten */
            border: 2px solid transparent; /* Border transparan untuk animasi */
            transition: border-color 0.4s ease; /* Transisi border */
        }
        .contact-card:hover {
            border-color: #000; /* Warna border saat hover */
        }
        .contact-icon {
            font-size: 28px; /* Ukuran ikon yang lebih besar */
            color: #007bff;
        }
        .contact-item {
            margin-bottom: 20px; /* Jarak antar item */
        }
        h2 {
            margin-bottom: 30px; /* Jarak bawah judul */
        }
        .contact-description {
            font-size: 16px;
            margin-bottom: 20px; /* Tambah jarak bawah deskripsi */
            color: #555; /* Warna teks deskripsi */
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="contact-card">
                    <h2>Kontak Kami</h2>
                    <p class="contact-description">
                    jika anda tertarik menjadi rekanan/reseller hubungi kami di bawah
                </p>
                    <div class="contact-item">
                        <a href="mailto:info@contoh.com" class="btn btn-outline-primary btn-lg">
                            <i class="contact-icon fas fa-envelope"></i> Kirim Email
                        </a>
                    </div>
                    <div class="contact-item">
                        <a href="https://www.instagram.com/mtnspring_japan.official/" class="btn btn-outline-info btn-lg" target="_blank">
                            <i class="contact-icon fab fa-instagram"></i> Ikuti di Instagram
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>
</html>

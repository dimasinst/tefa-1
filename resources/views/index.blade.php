<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>MTN.SPRING</title>
    
    <style>
        body {
            background-color: #f3f4f7;
            font-family: 'Open Sans', sans-serif;
            color: #333;
            padding: 0;
            margin: 0;
            overflow-x: hidden;
        }

        .jumbotron {
            background-color: #fff;
            position: relative;
            text-align: center;
        }

        .jumbotron img {
            max-width: 100%;
            height: auto;
            border-radius: 5px;
        }

        .jumbotron .btn-container {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            z-index: 2;
            text-align: center;
        }

           .jumbotron h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 3rem;
        font-weight: 700;
        color: #fff;
        text-align: center;
        text-transform: uppercase;
        letter-spacing: 2px;
        margin-bottom: 20px;
        text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.3); /* Menambahkan bayangan pada teks */
        animation: fadeIn 2s ease-in-out;
    }
    @keyframes fadeIn {
        0% {
            opacity: 0;
            transform: translateY(20px);
        }
        100% {
            opacity: 1;
            transform: translateY(0);
        }
    }

        .jumbotron .btn-container .btn {
        font-size: 1.2rem;
        padding: 15px 40px;
        background-color: #ff6347;
        color: #fff;
        text-transform: uppercase;
        border-radius: 30px;
        border: 3px solid #ff6347; /* Menambahkan border */
        transition: all 0.4s ease;
        position: relative;
        overflow: hidden;
    }

    .jumbotron .btn-container .btn:hover {
        background-color: #ff4500;
        transform: scale(1.1); /* Membesarkan tombol sedikit */
        box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.2); /* Menambah bayangan */
        color: #fff;
    }

    .jumbotron .btn-container .btn::before {
        content: "";
        position: absolute;
        top: 50%;
        left: 50%;
        width: 300%;
        height: 300%;
        background: rgba(255, 255, 255, 0.2);
        border-radius: 50%;
        transition: all 0.5s ease;
        transform: translate(-50%, -50%) scale(0);
    }

    .jumbotron .btn-container .btn:hover::before {
        transform: translate(-50%, -50%) scale(1);
    }

        /* About Section */
        .about-section {
            background: #ffffff;
            padding: 40px;
            margin: 15px 0;
            display: flex;
            align-items: center;
            border-radius: 12px;
            box-shadow: 0px 8px 20px rgba(0, 0, 0, 0.15);
            max-width: 1200px;
            margin-left: auto;
            margin-right: auto;
            overflow: hidden;
        }

        .about-image {
            flex: 1;
            max-width: 50%;
            padding: 20px;
            animation: move 3s linear infinite;
        }

        @keyframes move {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(20px); /* Bergerak ke kanan */
            }
            100% {
                transform: translateX(0);
            }
        }

        .about-image img {
            max-width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0px 6px 12px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .about-content {
            flex: 1;
            padding: 20px;
            max-width: 600px;
        }

        .about-content h3 {
            font-size: 2.5rem;
            font-weight: 700;
            color: #2b2b2b;
            margin-bottom: 20px;
            border-left: 5px solid #ff6347;
            padding-left: 15px;
        }

        .about-content p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.7;
            margin-bottom: 25px;
        }

        .product-list {
            list-style-type: none;
            padding: 0;
            margin-top: 15px;
            color: #444;
        }

        .product-list h4 {
            font-size: 1.5rem;
            font-weight: bold;
            color: #333;
            margin-bottom: 15px;
            border-bottom: 2px solid #ff6347;
            padding-bottom: 5px;
            margin-bottom: 20px;
        }

        .product-list li {
            display: flex;
            align-items: center;
            margin-bottom: 10px;
            font-size: 1.1rem;
            color: #333;
            padding: 10px 0;
            transition: transform 0.3s ease-in-out;
        }

        .product-list li:hover {
            transform: translateX(10px);
            background-color: #f8f8f8;
            box-shadow: 0px 4px 12px rgba(0, 0, 0, 0.1);
        }

        .product-list li i {
            margin-right: 10px;
            color: #ff6347;
            font-size: 1.5rem;
        }
        /* Video Section */
.video-section {
    background: #f9f9f9;
    padding: 50px 0;
    text-align: center;
}

.video-section h4 {
    font-size: 2rem;
    font-weight: bold;
    color: #333;
    margin-bottom: 30px;
    border-bottom: 2px solid #ff6347;
    padding-bottom: 10px;
}

.video-container {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
    gap: 20px;
}

.video-item {
    background: #fff;
    box-shadow: 0px 6px 15px rgba(0, 0, 0, 0.1);
    padding: 15px;
    border-radius: 8px;
    max-width: 560px;
    width: 100%;
    transition: transform 0.3s ease-in-out;
}

.video-item:hover {
    transform: translateY(-10px);
}

.video-description {
    margin-bottom: 15px;
    font-size: 1rem;
    color: #555;
    line-height: 1.6;
}

.video-frame iframe {
    width: 100%;
    height: 315px;
    border-radius: 8px;
}
        /* Responsiveness */
        @media (max-width: 768px) {
            .about-section {
                flex-direction: column;
                text-align: center;
            }
            .about-image, .about-content {
                max-width: 100%;
            }
            .about-content h3 {
                font-size: 2rem;
            }
            .jumbotron {
                padding: 1px 1px;
            }
            .video-container {
        flex-direction: column;
        align-items: center;
    }

    .video-item {
        width: 90%;
    }
    .jumbotron .btn-container h2 {
                font-size: 1rem;
            }

            .jumbotron .btn-container .btn {
                font-size: 0.5rem;
                padding: 12px 25px;
            }
        }
    </style>
</head>

<body>
    @include('components.navbar')


    <!-- Jumbotron Section with Image -->
    <section class="jumbotron text-center mt-5 pt-3" id="home" data-aos="fade-up" data-aos-duration="1000">
        <div>
            <img src="{{ asset('image/home.png') }}" alt="Jumbotron Image" class="img-fluid" data-aos="zoom-in" data-aos-delay="200">
        </div>
        <!-- Tombol untuk mengarah ke Inquery -->
        <div class="btn-container">
    <h2>Temukan Produk Unggulan Kami!</h2>
    <a href="{{route('categories.valve')}}" class="btn btn-lg" data-aos="fade-up" data-aos-duration="1000">
        Lihat Produk Sekarang
    </a>
</div>

    </section>

    <!-- About Us Section with Animation -->
    <section id="about" class="about-section" data-aos="fade-up" data-aos-duration="1200">
        <!-- Image Side -->
        <div class="about-image" data-aos="fade-right" data-aos-duration="1500" data-aos-delay="300">
            <img src="{{ asset('image/about.jpeg') }}" alt="Company Image">
        </div>

        <div class="about-content" data-aos="fade-left" data-aos-duration="1500" data-aos-delay="500">
            <h3>Tentang Kami</h3>
            <p>
                <b>MTN Spring</b> adalah perusahaan lokal yang fokus pada pengembangan dan inovasi komponen spring untuk balapan.
                Kami menggunakan material terbaik yang diimpor dari Jepang, sehingga produk kami menawarkan performa maksimal dengan durabilitas tinggi.
            </p>
            <p>
                Kami berkomitmen untuk memenuhi kebutuhan pasar akan produk-produk berkualitas yang dihasilkan melalui penelitian dan pengujian intensif.
            </p>
            <ul class="product-list" data-aos="fade-up" data-aos-delay="700">
    <h4>Produk Kami</h4>
    <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"><b class="fas fa-car-battery">Valve Spring (Per Klep)</b></li>

    <hr>
    <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="100"><b class="fas fa-car-battery"> Clutch Spring (Per Kopling)</b></li>
    <hr>
    <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="200"><b class="fas fa-tools">Primary Spring (CVT Spring)</b> </li>
    <hr>
    <li data-aos="fade-up" data-aos-duration="600" data-aos-delay="200"><b class="fas fa-tools">Secondary Spring (Per Sentri)</b> </li>

</ul>

        </div>
    </section>
    <!-- Video Section -->
<section id="videos" class="video-section" data-aos="fade-up" data-aos-duration="1200">
    <h4>Video Kami</h4>
    <div class="video-container">
        <!-- Video 1 -->
        <div class="video-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="100">
            <div class="video-description">
                <p>Video 1: Penjelasan mengenai produk pertama kami, Valve Spring (Per Klep), dan cara kerjanya dalam aplikasi balapan.</p>
            </div>
            <div class="video-frame">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_URL_1" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Video 2 -->
        <div class="video-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="200">
            <div class="video-description">
                <p>Video 2: Menampilkan testimoni dari pengguna kami yang menggunakan produk Clutch Spring (Per Kopling) dalam motor balap mereka.</p>
            </div>
            <div class="video-frame">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_URL_2" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
        <!-- Video 3 -->
        <div class="video-item" data-aos="fade-up" data-aos-duration="600" data-aos-delay="300">
            <div class="video-description">
                <p>Video 3: Demonstrasi penggunaan produk Primary Spring (CVT Spring) dalam motor yang digunakan di ajang balap.</p>
            </div>
            <div class="video-frame">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/YOUR_VIDEO_URL_3" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
</section>


@includeWhen($profile, 'components.footer', ['profile' => $profile])




    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: false,  // Membiarkan animasi berjalan terus
            mirror: true   // Agar animasi dipicu lagi ketika elemen muncul kembali
        });
    </script>
</body>
</html>

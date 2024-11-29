@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5" style="background: linear-gradient(135deg, #e0e0e0, #f5f5f5); padding: 40px; border-radius: 10px;">
    <h1 class="text-center fw-bold mb-5" style="font-family: 'Poppins', sans-serif; color: #333;">Cara Pemasangan</h1>

    <!-- Section: Cara Pemasangan Preklep -->
    <section class="mb-5">
        <div class="row text-center mt-4">
            <!-- Langkah 1 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="800">
                <div class="card shadow-lg border-0 rounded">
                    <img src="{{ asset('image/step1.jpeg') }}" class="card-img-top rounded" alt="Cara Pemasangan Preklep 1">
                </div>
            </div>
            <!-- Langkah 2 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1000">
                <div class="card shadow-lg border-0 rounded">
                    <img src="{{ asset('image/step2.jpeg') }}" class="card-img-top rounded" alt="Cara Pemasangan Preklep 2">
                </div>
            </div>
            <!-- Langkah 3 -->
            <div class="col-md-4 mb-4" data-aos="fade-up" data-aos-duration="1200">
                <div class="card shadow-lg border-0 rounded">
                    <img src="{{ asset('image/step3.jpeg') }}" class="card-img-top rounded" alt="Cara Pemasangan Preklep 3">
                </div>
            </div>
        </div>
    </section>

    <!-- Section: Video Barcode -->
    <section class="mb-5">
        <h2 class="text-center fw-bold mb-4" style="color: #555; font-family: 'Poppins', sans-serif;">Cara Menggunakan Barcode</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center video-container" data-aos="zoom-in" data-aos-duration="800">
                <video controls class="w-100 rounded shadow-lg" style="border: 2px solid #ccc;">
                    <source src="{{ asset('videos/barcode.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Section: Testimoni Pelanggan -->
    <section>
        <h2 class="text-center fw-bold mb-4" style="color: #555; font-family: 'Poppins', sans-serif;">Testimoni Pelanggan</h2>
        <div id="carouselTestimoni" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <!-- Testimoni 1 -->
                <div class="carousel-item active">
                    <div class="card shadow-lg border-0 rounded text-center">
                        <img src="{{ asset('image/testi1.jpeg') }}" class="card-img-top rounded mx-auto" alt="Testimoni 1" style="width: 70%;">
                        <div class="card-body">
                            <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #333;">"Produk sangat berkualitas, pengiriman cepat, pemasangan mudah!"</p>
                        </div>
                    </div>
                </div>
                <!-- Testimoni 2 -->
                <div class="carousel-item">
                    <div class="card shadow-lg border-0 rounded text-center">
                        <img src="{{ asset('image/testi2.jpeg') }}" class="card-img-top rounded mx-auto" alt="Testimoni 2" style="width: 70%;">
                        <div class="card-body">
                            <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #333;">"Barang sesuai deskripsi dan sangat membantu performa motor saya!"</p>
                        </div>
                    </div>
                </div>
                <!-- Testimoni 3 -->
                <div class="carousel-item">
                    <div class="card shadow-lg border-0 rounded text-center">
                        <img src="{{ asset('image/testi3.jpeg') }}" class="card-img-top rounded mx-auto" alt="Testimoni 3" style="width: 70%;">
                        <div class="card-body">
                            <p class="card-text" style="font-family: 'Roboto', sans-serif; color: #333;">"Kualitas top! Sangat puas dengan produk ini."</p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselTestimoni" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselTestimoni" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
</div>

<!-- Footer -->


<!-- CSS -->
<style>
    .card:hover .card-img-top {
        transform: scale(1.05); /* Efek zoom pada gambar saat hover */
        transition: transform 0.3s ease;
    }
    
    .video-container{
        width: 50%;
    }

    .video-container:hover video {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    .carousel .carousel-control-prev-icon,
    .carousel .carousel-control-next-icon {
        background-color: rgba(85, 85, 85, 0.5); /* Abu-abu gelap */
        border-radius: 50%;
    }

    section {
        background: linear-gradient(135deg, #d6d6d6, #f0f0f0);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }
</style>

<!-- AOS Script -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection

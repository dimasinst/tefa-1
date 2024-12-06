@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5" style="background: #ffffff; padding: 50px; border-radius: 20px; box-shadow: 0px 12px 35px rgba(0, 0, 0, 0.1);">

    <!-- Section: Cara Menggunakan Barcode -->
    <section class="mb-5" data-aos="fade-up" data-aos-duration="800">
        <h2 class="text-center fw-bold mb-4" style="color: #333;">Cara Menggunakan Barcode</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center video-container">
                <video controls class="w-100 rounded shadow-lg">
                    <source src="{{ asset('videos/barcode.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Section: Testimoni Pelanggan -->
    <section class="mt-5" data-aos="fade-up" data-aos-duration="800">
        <h2 class="text-center fw-bold mb-4" style="color: #333;">Testimoni Pelanggan</h2>
        <div id="carouselTestimoni" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($testimoni as $key => $testimonial)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="card shadow-lg border-0 rounded text-center glowing-card">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="card-img-top rounded mx-auto" alt="Testimoni {{ $key + 1 }}" style="width: 70%;">
                        <div class="card-body">
                            <p class="card-text">{{ $testimonial->message }}</p>
                        </div>
                    </div>
                </div>
                @endforeach
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

<!-- CSS -->
<style>
    /* Latar belakang utama */
    body {
        background: #ececec; /* Lebih gelap dibanding sebelumnya */
        font-family: 'Poppins', sans-serif;
        color: #444;
    }

    /* Section styling */
    section {
        background: #ffffff;
        padding: 30px 40px;
        border-radius: 15px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 40px;
    }

    /* Video container */
    .video-container {
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 5px 20px rgba(0, 0, 0, 0.1);
    }

    /* Hover efek glowing untuk video */
    .video-container:hover video {
        transform: scale(1.03);
        box-shadow: 0px 10px 30px rgba(255, 145, 77, 0.5);
        transition: all 0.4s ease;
    }

    /* Kartu testimonial */
    .glowing-card {
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .glowing-card:hover {
        transform: scale(1.03);
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.15);
    }

    /* Carousel control styling */
    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000; /* Tombol hitam */
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }

    /* Typography */
    h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 2.2rem;
        color: #333;
        margin-bottom: 20px;
    }

    .card-text {
        font-size: 1rem;
        color: #555;
    }
</style>

<!-- AOS Animation -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection

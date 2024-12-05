@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5" style="background: linear-gradient(135deg, #f1f1f1, #e0e0e0); padding: 40px; border-radius: 10px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.1);">

    <!-- Section: Cara Pemasangan Preklep -->
    <!-- Section: Video Barcode -->
    <section class="mb-5">
        <h2 class="text-center fw-bold mb-4" style="color: #444; font-family: 'Poppins', sans-serif;">Cara Menggunakan Barcode</h2>
        <div class="row justify-content-center">
            <div class="col-md-8 text-center video-container" data-aos="zoom-in" data-aos-duration="800">
                <video controls class="w-100 rounded shadow-lg" style="border: 2px solid #ddd;">
                    <source src="{{ asset('videos/barcode.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Section: Testimoni Pelanggan -->
    <section class="mt-5">
        <h2 class="text-center fw-bold mb-4" style="color: #444; font-family: 'Poppins', sans-serif;">Testimoni Pelanggan</h2>
        <div id="carouselTestimoni" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($testimoni as $key => $testimonial)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="card shadow-lg border-0 rounded text-center">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="card-img-top rounded mx-auto" alt="Testimoni {{ $key + 1 }}" style="width: 70%;">
                        <div class="card-body">
                            <p class="card-text text-muted">{{ $testimonial->message }}</p>
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

<!-- Footer -->

<!-- CSS -->
<style>
    /* Hover effects for card image */
    .card:hover .card-img-top {
        transform: scale(1.05); /* Image zoom effect on hover */
        transition: transform 0.3s ease;
    }

    /* Video container styling */
    .video-container {
        width: 50%;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.2);
    }

    .video-container:hover video {
        transform: scale(1.05);
        transition: transform 0.3s ease;
    }

    /* Customizing carousel controls */
    .carousel .carousel-control-prev-icon,
    .carousel .carousel-control-next-icon {
        background-color: rgba(85, 85, 85, 0.5); /* Dark gray for the carousel controls */
        border-radius: 50%;
        padding: 10px;
    }

    /* Section background styling */
    section {
        background: linear-gradient(135deg, #d6d6d6, #f0f0f0);
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 30px;
    }

    /* Card styling for the testimonials */
    .card {
        transition: transform 0.3s ease-in-out;
    }

    .card:hover {
        transform: scale(1.02); /* Slight scaling effect on hover */
    }

    /* Typography for the header */
    h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 2.2rem;
        color: #333;
    }

    /* Card text styling */
    .card-body .card-text {
        font-size: 1rem;
        color: #666;
    }
</style>

<!-- AOS Script for animations -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection

@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5" style="background: #ffffff; padding: 20px; border-radius: 20px; box-shadow: 0px 12px 35px rgba(0, 0, 0, 0.1);">

    <!-- Section: Cara Menggunakan Barcode -->
    <section data-aos="fade-up" data-aos-duration="800" style="margin-bottom: 20px;">
        <h2 class="text-center fw-bold mb-4" style="color: #333;">Cara Menggunakan Barcode</h2>
        <div class="">
            <div class=" text-center video-container">
                <video controls class="rounded shadow-lg" style="width: 25%; width: 25%; height: 60%;">
                    <source src="{{ asset('videos/tutor.mp4') }}" type="video/mp4">
                </video>
            </div>
        </div>
    </section>

    <!-- Section: Testimoni Pelanggan -->
    <section data-aos="fade-up" data-aos-duration="800" style="margin-top: 0;">
        <h2 class="text-center fw-bold mb-4" style="color: #333;">Testimoni Pelanggan</h2>
        <div id="carouselTestimoni" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($testimoni as $key => $testimonial)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}">
                    <div class="card shadow-lg border-0 rounded text-center glowing-card">
                        <img src="{{ asset('storage/' . $testimonial->image) }}" class="card-img-top rounded mx-auto" alt="Testimoni {{ $key + 1 }}" style="width: 80%; max-width: 300px;">
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
    body {
        background: #ececec;
        font-family: 'Poppins', sans-serif;
        color: #444;
    }

    section {
        background: #ffffff;
        padding: 20px;
        border-radius: 15px;
        box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.1);
        margin-bottom: 20px;
    }

    section:last-of-type {
        margin-bottom: 0;
    }

    .glowing-card {
        transition: all 0.3s ease-in-out;
        box-shadow: 0px 5px 15px rgba(0, 0, 0, 0.1);
    }

    .glowing-card:hover {
        transform: scale(1.03);
        box-shadow: 0px 8px 25px rgba(0, 0, 0, 0.15);
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        background-color: #000;
        border-radius: 50%;
        width: 40px;
        height: 40px;
    }

    h2 {
        font-family: 'Poppins', sans-serif;
        font-size: 1.8rem;
        color: #333;
        margin-bottom: 20px;
    }

    .card-text {
        font-size: 0.9rem;
        color: #555;
    }

    @media (max-width: 768px) {
        .container {
            padding: 15px;
        }

        section {
            padding: 15px;
        }

        h2 {
            font-size: 1.5rem;
        }

        .card-text {
            font-size: 0.8rem;
        }
    }
</style>

<!-- AOS Animation -->
<link rel="stylesheet" href="https://unpkg.com/aos@2.3.1/dist/aos.css" />
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
@endsection

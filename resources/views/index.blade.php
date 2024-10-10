<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <style>
        /* Gaya tambahan untuk video */
        .video-section .row {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between; /* Atur jarak antar video */
        }
        .video-section video {
            width: 100%;
            max-width: 250px; /* Mengecilkan ukuran maksimum video */
            border-radius: 10px; /* Menambahkan radius sudut pada video */
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Memberikan efek bayangan pada video */
        }
        
        /* Gaya tambahan untuk gambar jumbotron */
        .jumbotron img {
            border-radius: 15px; /* Membuat sudut gambar lebih halus */
            max-height: 520px; /* Membatasi tinggi maksimum gambar */
            object-fit: cover; /* Memastikan gambar ter-crop dengan baik */
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan pada gambar */
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <!-- Jumbotron Section -->
    <section class="jumbotron text-center" id="home">
        <div class="container">
            <h2 class="text-center">MTN SPRING</h2>
            <!-- Gambar Jumbotron Potret -->
            <img src="{{ asset('image/foto1.jpeg') }}" alt="Jumbotron Image" class="d-block w-100 mt-4">
        </div>
    </section>

    <!-- Video Section -->
    <section class="video-section mt-5">
        <div class="container text-center">
            <h3 class="mb-4">Video Kami</h3>
            <div class="row">
                <div class="col-4 mb-4">
                    <video controls>
                        <source src="{{ asset('videos/video1.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-4 mb-4">
                    <video controls>
                        <source src="{{ asset('videos/video2.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
                <div class="col-4 mb-4">
                    <video controls>
                        <source src="{{ asset('videos/video3.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                </div>
            </div>
        </div>
    </section>

    @include('components.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</body>

</html>

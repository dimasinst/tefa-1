<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
    <!-- Tambahan CSS untuk style custom -->
    <style>
        .carousel-indicators [data-bs-target] {
            background-color: #ffbf00; /* Warna indikator yang lebih cerah */
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5); /* Background control yang lebih jelas */
            border-radius: 50%;
            width: 3rem;
            height: 3rem;
        }

        .card {
            border: none;
        }

        .card-body {
            background: #f7f7f7;
            border-top: 5px solid #ffbf00;
        }

        .carousel-inner .carousel-item {
            transition: transform 1s ease; /* Animasi transisi yang lebih halus */
        }
    </style>
</head>

<body>

    @include('components.navbar')

    <!-- Jumbotron Section -->
    <section class="jumbotron text-center" id="home">
        <div class="container">
            <h2 class="text-center">MTN SPRING</h2>
            <!-- Carousel inside Jumbotron -->
            <div id="mediaCarousel" class="carousel slide mt-4" data-bs-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-bs-target="#mediaCarousel" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#mediaCarousel" data-bs-slide-to="1"></li>
                </ol>


    
<section id="about" class="mt-5 mb-5">

                <!-- Carousel Inner -->
                <div class="carousel-inner">
                    <!-- First Slide - Image -->
                    <div class="carousel-item active">
                        <div class="d-flex justify-content-center">
                            <div class="card shadow-lg" style="width: 30rem;">
                                <img src="https://via.placeholder.com/600x400" class="card-img-top" alt="Image Slide">
                                <div class="card-body text-center">
                                    <h5 class="card-title">Foto Produk</h5>
                                    <p class="card-text">Deskripsi singkat tentang produk di foto ini.</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Second Slide - Video -->
                    <div class="carousel-item">
                        <div class="d-flex justify-content-center">
                            <div class="card shadow-lg" style="width: 30rem;">
                                <video class="card-img-top" controls>
                                    <source src="https://www.w3schools.com/html/mov_bbb.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>
                                <div class="card-body text-center">
                                    <h5 class="card-title">Video Produk</h5>
                                    <p class="card-text">Video demo tentang produk kami.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Carousel Controls -->
                <a class="carousel-control-prev" href="#mediaCarousel" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#mediaCarousel" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </section>  

    <!-- About Section -->
    <section id="about" class="mt-5 mb-5">

        <h2 class="text-center">Tentang Kami</h2>
        <p class="text-center">Deskripsi tentang perusahaan Anda.</p>
    </section>

    @include('components.footer')

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js"></script>

</body>

</html>

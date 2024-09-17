<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="UTF-8">
    <title>DIMAS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-warning fixed-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">
                <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="MTN" width="30" height="24">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <form class="d-flex ms-auto me-3" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Cari</button>
                </form>
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#Product">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About Us</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button class="btn btn dropdown-toggle" type="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Dropdown button
                    </button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Action</a></li>
                        <li><a class="dropdown-item" href="#">Another action</a></li>
                        <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>







    <footer class="bg-light text-center text-lg-start">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0">
                    <h5 class="text-uppercase">Ikuti Kami</h5>
                    <p>Ikuti kami di media sosial dan dapatkan pembaruan terbaru.</p>
                </div>
                <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center">
                    <div class="social-icons">
                        <a href="https://www.facebook.com" target="_blank" class="facebook-icon">
                            <i class="bi bi-facebook fa-2x"></i>
                        </a>
                        <a href="https://www.instagram.com/_zyomont/" target="_blank" class="instagram-icon">
                            <i class="bi bi-instagram fa-2x"></i>
                        </a>
                        <a href="mailto:info@example.com" target="_blank" class="email-icon">
                            <i class="bi bi-envelope-fill fa-2x"></i>
                        </a>
                        <a href="https://wa.me/08816803120" target="_blank" class="whatsapp-icon">
                            <i class="bi bi-whatsapp fa-2x"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <div class="bg-dark text-center p-3">
            © 2024 Hak Cipta:
            <a class="text-white" href="https://www.instagram.com/_zyomont/">developer</a>
        </div>
    </footer>



</body>

</html>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
    <title>MTN SPRING</title>
  
  <head>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="{{asset('css/style.css')}}">  
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<nav class="navbar navbar-expand-lg bg-warning fixed-top">
  <div class="container-fluid">
  <a class="navbar-brand" href="#">
      <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="MTN" width="30" height="24">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
  <button class="btn btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
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

<section class="jumbotron text-center " id="home">
  <div class="container">
    <h2 class="text-center">MTN SPRING</h2>
    <div class="my-4">
      <img src="https://via.placeholder.com/600x300" class="img-fluid rounded" alt="Jumbotron Image">
    </div>
  </div>
</section>


<section id="Product" class="mb-5 mt-5">
  <div class="container py-5">
  <h2 class="text-center">Product</h2>

  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item" role="presentation">
    <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="true">velg kecil</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill" data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile" aria-selected="false">velg sedang</button>
  </li>
  <li class="nav-item" role="presentation">
    <button class="nav-link" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">velg besar</button>
  </li>

</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab" tabindex="0">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
      <div class="col velg-kecil" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2001</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-kecil" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2002</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-kecil" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2003</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-kecil" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2004</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
    </div></div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab" tabindex="0">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
      <div class="col velg-sedang" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2005</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-sedang" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2006</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-sedang" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2007</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-sedang" data-aos="zoom-in">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2008</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab" tabindex="0">
    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
      <div class="col velg-besar" data-aos="fade-right">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2009</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-besar" data-aos="fade-right">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2010</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-besar" data-aos="fade-right">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2011</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
      <div class="col velg-besar" data-aos="fade-right">
        <div class="card">
          <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
          <div class="card-body">
            <h5 class="card-title">vv2012</h5>
            <p class="card-text">Lorem ipsum dolor sit amet consectetur, adipisicing elit.</p>
            <div class="d-flex justify-content-around">
              <button class="btn btn-primary">Selengkapnya</button>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

    
  </div>
</section>





  <section id="about" class="mt-5 mb-5">
    <h2 class="text-center">Tentang Kami</h2>
    <p class="text-center"></p>
  </section>

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




  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">

  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
  <script>AOS.init();</script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>
</html>

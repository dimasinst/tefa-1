<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>

    @include('components.navbar')

    <section class="jumbotron text-center " id="home">
        <div class="container">
            <h2 class="text-center">MTN SPRING</h2>
            <div class="my-4">
                <img src="https://via.placeholder.com/600x300" class="img-fluid rounded" alt="Jumbotron Image">
            </div>
        </div>
    </section>

    <!-- Kategori Nav Pills -->
    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
        @foreach ($categories as $category)
            <li class="nav-item" role="presentation">
                <a class="nav-link {{ $category->id == $selectedCategoryId ? 'active' : '' }}"
                    id="category-{{ $category->id }}" href="{{ route('category.show', $category->id) }}" role="tab">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Tab content -->
    <div class="tab-content" id="pills-tabContent">
        @foreach ($products as $category)
            <div class="tab-pane fade {{ $loop->first ? 'show active' : '' }}" id="pills-{{ $category->slug }}"
                role="tabpanel" aria-labelledby="pills-{{ $category->slug }}-tab" tabindex="0">
                <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                    @php
                        $categoryProducts = $products->where('category_id', $category->id);
                    @endphp

                    @forelse ($categoryProducts as $product)
                        <div class="col" data-aos="zoom-in">
                            <div class="card">
                                <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="...">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
                                    <div class="d-flex justify-content-around">
                                        <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">
                                            <i class="fa-solid fa-circle-info pt-1"></i>Selengkapnya
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <p>Tidak ada produk di kategori ini.</p>
                    @endforelse
                </div>
            </div>
        @endforeach
    </div>

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
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>

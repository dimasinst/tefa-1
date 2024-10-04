<!DOCTYPE html>
<html lang="en">

<head>
    @include('components.head')
</head>

<body>

    @include('components.navbar')

    <section class="jumbotron text-center" id="home">
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
                                        <a href="{{ route('detail', $product->id) }}" class="btn btn-primary">
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

    @include('components.footer')

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search-input');
            const products = document.querySelectorAll('.card');
            const noResultsMessage = document.createElement('p');

            searchInput.addEventListener('keyup', function () {
                console.log('Key pressed!'); // Debug
                const searchTerm = searchInput.value.toLowerCase();
                let found = false;

                noResultsMessage.remove();

                products.forEach(product => {
                    const title = product.querySelector('.card-title').textContent.toLowerCase();
                    const description = product.querySelector('.card-text').textContent.toLowerCase();

                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        product.parentElement.style.display = ''; // Menampilkan produk
                        found = true;
                    } else {
                        product.parentElement.style.display = 'none'; // Menyembunyikan produk
                    }
                });

                if (!found) {
                    noResultsMessage.textContent = 'Tidak ada produk ditemukan.';
                    noResultsMessage.classList.add('text-center', 'mt-3');
                    document.querySelector('.tab-content').appendChild(noResultsMessage);
                }
            });
        });
    </script>
</body>

</html>

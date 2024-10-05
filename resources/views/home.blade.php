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
                <a class="nav-link {{ isset($selectedCategoryId) && $category->id == $selectedCategoryId ? 'active' : '' }}"
                    id="category-{{ $category->id }}" href="{{ route('home', ['category_id' => $category->id]) }}" role="tab">
                    {{ $category->name }}
                </a>
            </li>
        @endforeach
    </ul>

    <!-- Tab content -->
    <div class="tab-content" id="pills-tabContent">
        <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab" tabindex="0">
            <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
                @forelse ($products as $product)
                    <div class="col-md-4" data-aos="zoom-in">
                        <div class="card h-100">
                            <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                <div class="d-flex justify-content-around">
                                    <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">
                                        <i class="fa-solid fa-circle-info"></i> Selengkapnya
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <p class="text-center">Tidak ada produk di kategori ini.</p>
                @endforelse
            </div>
        </div>
    </div>

    

    @include('components.footer')

</body>

</html>
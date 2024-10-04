<head>
    @include('components.head')
</head>
<body>
    @include('components.navbar')

    <h1>Daftar Produk</h1>
    <div class="container">
        <div class="row"> <!-- Mengatur grid untuk kolom -->
            @foreach($products as $product)
                <div class="col-md-4" data-aos="zoom-in">
                    <div class="card">
                        <img src="https://via.placeholder.com/600x300" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <div class="d-flex justify-content-around">
                                <a href="{{ route('detail', $product->id) }}" class="btn btn-primary">
                                    <i class="fas fa-info-circle pt-1"></i> Lihat Detail
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>
<footer>
    @include('components.footer')
</footer>

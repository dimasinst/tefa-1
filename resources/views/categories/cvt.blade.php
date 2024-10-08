<head>
    @include('components.head')
    <style>
        .img {
            width: 100%;
            height: auto;
            max-width: 700px;
            max-height: 600px;
            display: block;
            margin-left: auto;
            margin-right: auto; 
        }
        .card-img-top {
            width: 100%;
            height: auto;
            max-width: 150px;
            max-height: 150px;
            object-fit: cover;
        }
    </style>
</head>
    <body>
    @include('components.navbar')
    @include('components.navproduct')
    @section('content')
    <div class="container">
        <img src="{{ asset('images/cvt.jpg') }}" alt="CVT" class="img">
        <h2>Produk CVT</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
            @foreach ($products as $product)
                <div class="col-md-3">
                    <div class="card">
<<<<<<< HEAD
                        <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
=======
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
>>>>>>> c8f2fb8 (memperbarui sedikit)
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ $product->description }}</p>
                            <a href="{{ route('detail', $product->id) }}" class="btn btn-primary">Selengkapnya</a>
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
<head>
    @include('components.head')
    <style>
        .product-name {
            font-size: 2.5rem;
            text-align: center;
            font-weight: bold;
            margin-bottom: 30px;
            color: #333;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
            width: 100%;
            transition: transform 0.2s ease-in-out;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .table th, .table td {
            vertical-align: middle;
        }

        .img-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
        }

        .card-img-top {
            height: 400px;
            object-fit: cover;
        }

        .content {
            min-height: 80vh;
            padding-bottom: 40px; /* Menambah jarak di bawah konten */
        }

        .product-description {
            margin-top: 30px;
            font-size: 1.2rem;
            text-align: justify;
            line-height: 1.6;
        }

        .navbar {
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .back-button {
            margin-top: 30px;
            text-align: center;
        }

        .btn-back {
            background: linear-gradient(135deg, #ff5e5e, #ff9f1c);
            color: white;
            border: none;
            padding: 10px 20px;
            font-size: 1rem;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-back:hover {
            background: linear-gradient(135deg, #ff9f1c, #ff5e5e);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Styling untuk produk terkait */
        .related-product {
            padding: 15px;
            margin-bottom: 100px;
        }

        .related-card {
            transition: transform 0.2s ease-in-out;
        }

        .related-card:hover {
            transform: scale(1.03);
        }

        .card-img {
            width: 100%;
            height: auto;
            max-width: 150px;
            max-height: 150px;
            object-fit: cover;
        }

        .card-title {
            color: #ff6600;
        }

        .btn {
            background-color: #ff6600;
            border: none;
            color: #fff;
            transition: background-color 0.2s;
        }

        .btn:hover {
            background-color: #ffa500;
        }

        .col-4 {
            padding: 10px;
        }

        .card-img {
            max-height: 150px;
            border-radius: 8px;
            object-fit: cover;
            margin: 0 auto;
            transition: transform 0.2s;
        }

        /* Responsif untuk tampilan mobile */
        @media (max-width: 768px) {
            .card-img-top {
                height: 250px;
            }

            .content {
                padding: 15px;
            }

            .back-button {
                margin-top: 20px;
            }

            .product-description {
                font-size: 1rem;
            }

            .product-name {
                font-size: 1.5rem;
                margin-bottom: 15px;
            }
        }
    </style>
</head>

<body>
    @include('components.navbar')

    <!-- Detail Produk Utama -->
    <div class="container mt-5 content">
        <div class="card p-4">
            <div class="row align-items-start">
                <div class="col-md-7 mb-4 mb-md-0 img-container">
                    <img src="{{ asset('storage/' . $productDetail->image) }}" class="card-img-top" alt="{{ $productDetail->name }}">
                </div>
                <div class="col-md-5">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><strong>Model:</strong></td>
                                <td>{{ $productDetail->name }}</td>
                            </tr>
                            @if ($products->category->name === 'Sentri')
                            <tr>
                                <td><strong>WIRE :</strong></td>
                                <td>{{ $products->wire }}</td>
                            </tr>
                            <tr>
                                <td><strong>Outside:</strong></td>
                                <td>{{ $products->outside }}</td>
                            </tr>
                            <tr>
                                <td><strong>Free Length:</strong></td>
                                <td>{{ $products->Free_length }}</td>
                            </tr>
                            <tr>
                                <td><strong>Initial Tension:</strong></td>
                                <td>{{ $products->Initial_Tension }}</td>
                            </tr>
                            <tr>
                                <td><strong>Spring Rate:</strong></td>
                                <td>{{ $products->spring_rate }}</td>
                            </tr>
                            <tr>
                                <td><strong>SPRING RATE:</strong></td>
                                <td>{{ $products->spring_rate }}</td>
                            </tr>
                            <tr>
                                <td><strong>deskripsi</strong></td>
                                <td>{{$products->description}}</td>
                            </tr>
                            @else
                            <tr>
                                <td><strong>WIRE :</strong></td>
                                <td>{{ $products->wire }}</td>
                            </tr>
                            <tr>
                                <td><strong>OUTSIDE:</strong></td>
                                <td>{{ $products->outside }}</td>
                            </tr>
                            <tr>
                                <td><strong>FREE HEIGHT:</strong></td>
                                <td>{{ $products->free_height }}</td>
                            </tr>
                            <tr>
                                <td><strong>SOLID HEIGHT:</strong></td>
                                <td>{{ $products->solid_height }}</td>
                            </tr>
                            <tr>
                                <td><strong>SPRING RATE:</strong></td>
                                <td>{{ $products->spring_rate }}</td>
                            </tr>
                            <tr>
                                <td><strong>deskripsi</strong></td>
                                <td>{{$products->description}}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

                <!-- Back Button Below Specifications -->
                <div class="back-button">
                    <a href="{{ url()->previous() }}" class="btn btn-back">Kembali</a>
                </div>

                <!-- Informasi Reseller -->
                <div class="text-center mt-4">
                    <p>Jika Anda tertarik untuk membeli, silakan hubungi Rekanan terdekat kami.</p>
                    <a href="{{ route('reseller.index') }}" class="btn btn-primary">
                        Hubungi Rekanan Kami
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Foto Pemasangan -->
    <div class="container mt-5">
        <h3 class="text-center">CARA PEMASANGAN</h3>
        <div class="row mt-4">
            <div class="col-md-4">
                <img src="{{ asset('image/step1.jpeg') }}" class="img-fluid" alt="Pemasangan 1">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('image/step2.jpeg') }}" class="img-fluid" alt="Pemasangan 2">
            </div>
            <div class="col-md-4">
                <img src="{{ asset('image/step3.jpeg') }}" class="img-fluid" alt="Pemasangan 3">
            </div>
        </div>
    </div>

    <!-- Produk Lain di Kategori yang Sama -->
    <div class="container py-5 mt-5">
        <h2>Produk Lain di Kategori yang Sama</h2>
        <div class="row row-cols-1 row-cols-md-3 g-4" id="product-list">
            @foreach ($relatedProducts as $product)
            <div class="col">
                <div class="card h-100">
                    <div class="row g-0 align-items-center">
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->name }}</h5>
                                <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                                <a href="{{ route('detail', $product->id) }}" class="btn">Selengkapnya</a>
                            </div>
                        </div>
                        <div class="col-4">
                            <img src="{{ asset('storage/' . $product->image) }}" class="img-fluid card-img" alt="{{ $product->name }}">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>

    @include('components.footer')
</body>

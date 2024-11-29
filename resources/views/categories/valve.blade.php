<!DOCTYPE html>
<html lang="en">
<head>
    @include('components.head')
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

    <style>
        body {
            font-family: 'Open Sans', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f7f8f9;
        }

        .container {
            padding: 20px 0 60px;
            margin-top: 20px;
        }

        .img {
            width: 100%;
            max-width: 700px;
            max-height: 600px;
            display: block;
            margin: 20px auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .img:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        .search-bar {
            position: relative;
            max-width: 400px;
            margin: 0 auto 20px;
        }

        .search-bar input {
            width: 100%;
            padding: 10px 40px 10px 15px;
            border-radius: 20px;
            border: 1px solid #ddd;
            font-size: 16px;
            transition: all 0.3s ease;
        }

        .search-bar input:focus {
            border-color: #ff6600;
            box-shadow: 0 0 5px rgba(255, 102, 0, 0.5);
        }

        .search-bar .search-icon {
            position: absolute;
            right: 15px;
            top: 50%;
            transform: translateY(-50%);
            font-size: 20px;
            color: #ff6600;
        }

        .card {
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            transition: transform 0.2s, box-shadow 0.2s;
        }

        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2);
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

        .no-results-message {
            color: #333;
            font-weight: bold;
            display: none;
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
        @media (max-width: 480px) {
            .search-bar input {
                font-size: 14px;
                padding: 8px 30px 8px 10px;
            }

            .card-title {
                font-size: 18px;
            }

            .btn {
                padding: 8px 12px;
                font-size: 14px;
            }
            .img {
        max-width: 90%; /* Mengatur lebar gambar menjadi 90% dari layar */
        height: auto;   /* Menjaga rasio aspek gambar */
    }
        }
    </style>
</head>

<body>
    @include('components.navbar')
    @include('components.navproduct')
    
    <div class="container">
        <div class="search-bar">
            <input type="search" id="search-input" placeholder="Cari Produk VALVE">
            <span class="search-icon">&#128269;</span> <!-- Ikon pencarian -->
        </div>

        <img src="{{ asset('image/valve.jpeg') }}" alt="VALVE" class="img">
        <h2 class="text-center my-4">Produk VALVE</h2>
        
        <div class="row row-cols-1 row-cols-md-3 g-4" id="product-list">
            @foreach ($products as $product)
                <div class="col">
                    <div class="card h-100">
                        <div class="row g-0 align-items-center">
                            <div class="col-8">
                                <div class="card-body">
                                    <h5 class="card-title">{{ $product->name }}</h5>
                                    <p class="card-text">{{ $product->description }}</p>
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
        
        <p class="text-center mt-3 no-results-message">Tidak ada produk ditemukan.</p>
    </div>

    <footer>
        @include('components.footer')
    </footer>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('search-input');
            const products = document.querySelectorAll('.card');
            const noResultsMessage = document.querySelector('.no-results-message');

            searchInput.addEventListener('keyup', function () {
                const searchTerm = searchInput.value.toLowerCase();
                let found = false;

                products.forEach(product => {
                    const title = product.querySelector('.card-title').textContent.toLowerCase();
                    const description = product.querySelector('.card-text').textContent.toLowerCase();

                    if (title.includes(searchTerm) || description.includes(searchTerm)) {
                        product.parentElement.style.display = '';
                        found = true;
                    } else {
                        product.parentElement.style.display = 'none';
                    }
                });

                noResultsMessage.style.display = found ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>

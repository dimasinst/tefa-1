@extends('layouts.app')

@section('content')
<head> 
    @include('components.head')
    <style>
        .product-container {
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 40px;
        }
        .product-image {
            max-height: 400px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 20px;
        }
        .product-details {
            list-style-type: none;
            padding: 0;
        }
        .product-details li {
            margin-bottom: 10px;
        }
        .product-details strong {
            color: #333;
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            transition: background-color 0.3s ease;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="product-container">
                    <h2 class="text-center">{{ $product->name }}</h2>
                    <div class="text-center mb-4">
                        @if($product->image)
                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid product-image">
                        @else
                            <img src="https://via.placeholder.com/400x400" alt="No image available" class="img-fluid product-image">
                        @endif
                    </div>
                    <p>{{ $product->description }}</p>

                    <!-- Detail tambahan -->
                    <ul class="product-details">
                        <li><strong>Model:</strong> {{ $product->model }}</li>
                        <li><strong>Wire:</strong> {{ $product->wire }}</li>
                        <li><strong>Outside:</strong> {{ $product->outside }}</li>
                        <li><strong>Free Height:</strong> {{ $product->free_height }}</li>
                        <li><strong>Solid Height:</strong> {{ $product->solid_height }}</li>
                        <li><strong>Spring Rate:</strong> {{ $product->spring_rate }}</li>
                        <li><strong>Kategori:</strong> {{ $product->category->name }}</li>
                    </ul>

                    <div class="text-center mt-4">
                        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Kembali ke Dashboard</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
@endsection

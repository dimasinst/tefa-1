@extends('layouts.admin') <!-- Extend the admin layout -->

@section('content')

    <!-- Product Details -->
    <div class="container mt-5 content">
        <div class="card p-4 shadow-lg border-0 rounded-lg">
            <div class="row align-items-center">
                <!-- Product Image Section -->
                <div class="col-md-6 mb-4 mb-md-0 img-container">
                    <img src="{{ asset('storage/' . $products->image) }}" class="card-img-top img-fluid rounded-lg shadow-sm">
                </div>

                <!-- Product Information Table -->
                <div class="col-md-6">
                    <table class="table table-striped table-hover table-bordered">
                        <tbody>
                            <tr>
                                <td><strong>Model:</strong></td>
                                <td>{{ $products->name }}</td>
                            </tr>
                            @if ($products->category->name === 'Sentri')
                            <tr>
                                <td><strong>WIRE:</strong></td>
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
                                <td><strong>Description:</strong></td>
                                <td>{{ $products->description }}</td>
                            </tr>
                            @else
                            <tr>
                                <td><strong>WIRE:</strong></td>
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
                                <td><strong>Description:</strong></td>
                                <td>{{ $products->description }}</td>
                            </tr>
                            @endif
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <!-- Back Button -->
    <div class="text-center mt-4">
        <a href="{{ route('admin.products.index') }}" class="btn btn-back px-5 py-3 rounded-pill">Kembali</a>
    </div>
    <style>
    .product-name {
        font-size: 2.5rem; /* Larger font size for product name */
        text-align: center; /* Center align */
        font-weight: bold;
        margin-bottom: 20px;
        color: #2c3e50; /* Darker shade for a professional look */
    }

    .card {
        background-color: #ffffff; /* White background for contrast */
    }

    .img-container {
        overflow: hidden;
        border-radius: 15px;
        box-shadow: 0 10px 20px rgba(0, 0, 0, 0.1);
    }

    .card-img-top {
        height: 100%;
        object-fit: cover;
    }

    .content {
        padding-bottom: 20px;
        margin-top: 50px;
    }

    .product-description {
        font-size: 1.2rem;
        color: #7f8c8d;
        line-height: 1.7;
        text-align: justify;
        margin-top: 30px;
    }

    .btn-back {
        background: linear-gradient(135deg, #ff5e5e, #ff9f1c); /* Gradient for the button */
        color: white;
        border: none;
        padding: 15px 30px;
        font-size: 1.2rem;
        border-radius: 25px;
        transition: background 0.3s ease, transform 0.3s ease;
    }

    .btn-back:hover {
        background: linear-gradient(135deg, #ff9f1c, #ff5e5e); /* Hover effect */
        transform: translateY(-5px); /* Slight lift effect on hover */
        box-shadow: 0 10px 15px rgba(0, 0, 0, 0.2);
    }
</style>

@endsection




<head>
    @include('components.head')
    <style>
        .card {
            border-radius: 10px;
            box-shadow: 0px 0px 15px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .img-container {
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .img-container img {
            width: 100%;
            height: auto; /* Menjaga rasio gambar */
            max-height: 400px; /* Batas tinggi gambar */
            object-fit: cover; /* Agar gambar tetap proporsional dalam kontainernya */
        }
        .content {
            min-height: 80vh;
            padding-bottom: 20px;
        }
        footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }
        .navbar {
            position: relative;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
@include('admin.navbar')
    <div class="container mt-5 content">
        <div class="card p-4">
            <div class="row align-items-center">
                <div class="col-md-4 mb-4 mb-md-0 img-container">
                    <!-- Pastikan untuk menggunakan path gambar yang benar -->
                    <img src="{{ asset('storage/' . $products->image) }}" alt="{{ $products->name }}">
                </div>
                <div class="col-md-8">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><strong>Model:</strong></td>
                                <td>{{ $products->name }}</td>
                            </tr>
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
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="text-center mt-4">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Kembali ke Dashboard</a>
    </div>
    <footer class="bg-light py-3">
        @include('components.footer')
    </footer>
</body>


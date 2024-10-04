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
    @include('components.navbar')

    <div class="container mt-5 content">
        <div class="card p-4">
            <div class="row align-items-center">
                <div class="col-md-4 mb-4 mb-md-0 img-container">
                    <!-- Pastikan untuk menggunakan path gambar yang benar -->
                    <img src="{{ asset('storage/' . $products->image) }}" alt="Deskripsi Gambar" class="img-fluid">
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
                                <td>{{ $products->Wire }}</td>
                            </tr>
                            <tr>
                                <td><strong>OUTSIDE:</strong></td>
                                <td>{{ $products->Outside }}</td>
                            </tr>
                            <tr>
                                <td><strong>FREE HEIGHT:</strong></td>
                                <td>{{ $products->Free_height }}</td>
                            </tr>
                            <tr>
                                <td><strong>SOLID HEIGHT:</strong></td>
                                <td>{{ $products->Solid_height }}</td>
                            </tr>
                            <tr>
                                <td><strong>SPRING RATE:</strong></td>
                                <td>{{ $products->Spring_rate }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <footer class="bg-light py-3">
        @include('components.footer')
    </footer>
</body>

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
                    <img src="path/to/your-image.jpg" alt="Deskripsi Gambar" class="img-fluid">
                </div>


                <div class="col-md-8">
                    <table class="table table-striped table-hover">
                        <tbody>
                            <tr>
                                <td><strong></strong></td>
                                <td>MTN SPRING</td>
                            </tr>
                            <tr>
                                <td><strong>Model:</strong></td>
                                <td>VL 019</td>
                            </tr>
                            <tr>
                                <td><strong>WIRE :</strong></td>
                                <td>2.9</td>
                            </tr>
                            <tr>
                                <td><strong>OUTSIDE:</strong></td>
                                <td>20.1</td>
                            </tr>
                            <tr>
                                <td><strong>FREE HEIGHT:</strong></td>
                                <td>35</td>
                            </tr>
                            <tr>
                                <td><strong>SOLID HEIGHT:</strong></td>
                                <td>17.4</td>
                            </tr>
                            <tr>
                                <td><strong>SPRING RATE:</strong></td>
                                <td>35.3 N/mm</td>
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

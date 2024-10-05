{{-- resources/views/products/about.blade.php --}}

<head>
    @include('components.head')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 0;
        }
        .container {
            padding: 30px;
            background-color: #ffffff;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        h1 {
            font-size: 2.5rem;
            font-weight: bold;
            color: #000000;
            text-align: center;
        }
        p {
            font-size: 1.2rem;
            line-height: 1.5;
            color: #555;
            text-align: center;
        }
        h2 {
            font-size: 2rem;
            font-weight: bold;
            color: #007bff;
        }
        .img-fluid {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        .row {
            margin-top: 30px;
        }
    </style>
</head>
<body>
    @include('components.navbar')

    <div class="container mt-5">
        <h1>Tentang Produk Kami</h1>
        <p>
            MTN Spring adalah Brand Local Indonesia yang berkonsentrasi untuk menyediakan Spart Part Spring. MTN Spring lahir untuk memenuhi kebutuhan Spring dengan kualitas terbaik dengan harga yang terjangkau (kompetitif). Produk MTN didesain khusus agar bisa mendapatkan power dan endurance yang mumpuni. Untuk merealisasikan tujuan tersebut kami disokong dengan supply material terbaik buatan Jepang.
            Saat kami memproduksi Valve Spring (Per Klep), Clutch Spring (Per Kopling), Primary Spring (CVT Spring), dan Secondary Spring / Clutch Weight (Per kampas ganda / sentri).
        </p>
        
        <div class="row mt-12">
            <div class="col-md-12">
                
                <p>
                    Produk kami dirancang dengan teknologi terbaru dan standar kualitas yang tinggi. Setiap produk melalui serangkaian uji coba untuk memastikan bahwa kami hanya memberikan yang terbaik untuk pelanggan kami.
                </p>
            </div>
           
        </div>
    </div>

    @include('components.footer')        
</body>

@include('components.head')

@include('components.navbar')

<head>
<style>
    .video-custom {
        width: 50%;
        max-width: 300px;
        height: auto;
        margin: 0 auto;
        display: block;
    }
    .step-title {
        font-size: 1.25rem;
        font-weight: bold;
        margin-bottom: 10px;
        text-align: center;
    }
    .text-center {
        text-align: center;
    }
    .container-custom {
        margin-top: 100px; 
    }
</style>
</head>

<body>
    <div class="container container-custom text-center">
        <div class="row">
            <div class="col-md-12">
                <h2>Panduan memasang per klep dengan benar</h2>
                <p>
                    Ikuti panduan tersebut agar menghasilkan performa klep yang maksimal
                </p>
            </div>
        </div>

        <div class="row mt-5">
            <div class="col-md-4 mb-4">
                <div class="step-title">Step 1</div>
                <img src="{{ asset('images/step1.jpg') }}" alt="Deskripsi Foto Step 1" class="img-fluid">
            </div>

            <div class="col-md-4 mb-4">
                <div class="step-title">Step 2</div>
                <img src="{{ asset('images/step2.jpg') }}" alt="Deskripsi Foto Step 2" class="img-fluid">
            </div>

            <div class="col-md-4 mb-4">
                <div class="step-title">Step 3</div>
                <img src="{{ asset('images/step3.jpg') }}" alt="Deskripsi Foto Step 3" class="img-fluid">
            </div>
        </div>

        <div class="container mt-5 text-center">
            <h2>Video Produk</h2>
            <p>
                Scan barcode di produk kami untuk terhubung langsung ke halaman Instagram kami
            </p>
            <video class="video-custom" controls>
                <source src="{{ asset('videos/barcode.mp4') }}" type="video/mp4">
                Your browser does not support the video tag.
            </video>
        </div>
    </div>
</body>

@include('components.footer')
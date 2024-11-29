@extends('layouts.app')

@section('content')
<head> 
    @include('components.head')
    
</head>
<body>
    <div class="container mt-5 pt-5">
        <h2>Daftar Produk</h2>

        <!-- Pesan Sukses -->
        @if(session('success'))
            <script>
                Swal.fire({
                    icon: 'success',
                    title: 'Success',
                    text: "{{ session('success') }}",
                    showConfirmButton: false,
                    timer: 3000
                });
            </script>
        @endif
        <div class="row">
            @foreach($products as $product)
                <div class="col-md-4">
                    <div class="card mb-4">
                        <img src="{{ asset('storage/' . $product->image) }}" class="card-img-top" alt="{{ $product->name }}">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->name }}</h5>
                            <p class="card-text">{{ Str::limit($product->description, 100) }}</p>
                            <a href="{{ route('product.show', $product->id) }}" class="btn btn-primary">Detail</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <script>
        // Menggunakan input pencarian dari navbar
        document.getElementById('navbarSearch').addEventListener('keyup', function() {
            let input = this.value.toLowerCase(); // Mengambil nilai dari input pencarian
            let productList = document.getElementById('productList');
            let productItems = productList.getElementsByClassName('product-item');

            // Menyembunyikan item yang tidak sesuai
            for (let i = 0; i < productItems.length; i++) {
                let productName = productItems[i].getElementsByClassName('card-title')[0].innerText.toLowerCase();
                if (productName.includes(input)) {
                    productItems[i].style.display = ''; // Tampilkan item jika sesuai
                } else {
                    productItems[i].style.display = 'none'; // Sembunyikan item jika tidak sesuai
                }
            }
        });
    </script>

</body>
@endsection
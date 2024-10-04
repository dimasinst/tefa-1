<head>
    @include('components.head')
</head>
<body>
    @include('components.navbar')


    <h1>Daftar Produk</h1>
    <div class="row">
        @foreach($products as $product)
        <div class="col-md-4">
            <div class="card">
                <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}" style="height: 100px;">
                <div class="card-body">
                    <h5 class="card-title">{{ $product->name }}</h5>
                    <p class="card-text">{{ $product->description }}</p>
                    <a href="{{ route('detail', $product->id) }}" class="btn btn-primary">
                        <i class="fa-solid fa-circle-info pt-1"></i>Selengkapnya</a>
                </div>
            </div>
        </div>
        @endforeach
    </div>  


    <div class="row row-cols-1 row-cols-md-3 g-4 py-5">
        @foreach($products as $product)
        <div class="col velg-kecil" data-aos="zoom-in">
          <div class="card">
            <img src="{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
            <div class="card-body">
              <h5 class="card-title">{{$product->name}}</h5>
              <p class="card-text">{{ $product->description }}</p>
              <div class="d-flex justify-content-around">
                <a href="{{ route('detail', $product->id) }}" class="btn btn-primary">
                    <i class="fa-solid fa-circle-info pt-1"></i>Selengkapnya</a>
              </div>
            </div>
           </div>
          </div>
        </div>
        @endforeach
    </div>




    @include('components.footer')
</body>

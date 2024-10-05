@extends('layouts.app')

@section('content')
<head> 
    @include('components.head')
</head>
<body>
    @include('components.navbar')

    <div class="container mt-5">
        <h2>{{ $product->name }}</h2>
        <div class="mb-4">
            @if($product->image)
                <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="img-fluid">
            @endif
        </div>
        <p>{{ $product->description }}</p>

        <!-- Detail tambahan -->
        <ul>
            <li><strong>Model:</strong> {{ $product->model }}</li>
            <li><strong>Wire:</strong> {{ $product->wire }}</li>
            <li><strong>Outside:</strong> {{ $product->outside }}</li>
            <li><strong>Free Height:</strong> {{ $product->free_height }}</li>
            <li><strong>Solid Height:</strong> {{ $product->solid_height }}</li>
            <li><strong>Spring Rate:</strong> {{ $product->spring_rate }}</li>
            <li><strong>Kategori:</strong> {{ $product->category->name }}</li>
        </ul>
        
        <a href="{{ route('home') }}" class="btn btn-primary">Kembali</a>
    </div>

    @include('components.footer')
</body>
@endsection

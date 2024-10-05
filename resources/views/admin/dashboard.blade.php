@extends('layouts.app') <!-- Pastikan Anda memiliki layout utama -->

@section('content')
<head> 
    @include('components.head')
</head>
<body>
    @include('admin.navbar')

    <div class="container mt-5 pt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="mb-4">Admin Dashboard</h2>

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

                <div class="mb-3">
                    <a href="{{ route('product.create') }}" class="btn btn-success me-2">
                        <i class="bi bi-plus-circle"></i> Create
                    </a>
                </div>
                
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Produk</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Kategori</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse($products as $product)
                                <tr>
                                    <td>{{ $product->name }}</td>
                                    <td>{{ Str::limit($product->description, 50) }}</td>
                                    <td>
                                        @if($product->image)
                                            <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100">
                                        @else
                                            N/A
                                        @endif
                                    </td>
                                    <td>{{ $product->category->name }}</td>
                                    <td>
                                        <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-primary btn-sm">Read</a>
                                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">Edit</a>
                                        <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;">
                                            @csrf
                                            @method('DELETE')
                                            <button class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">Delete</button>
                                        </form>
                                        
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5" class="text-center">Tidak ada produk ditemukan.</td>
                                </tr>
                            @endforelse
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    
    <!-- Skrip SweetAlert sudah diikutsertakan di layout atau head -->
</body>
@endsection

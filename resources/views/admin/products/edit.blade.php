@extends('layouts.app')

@section('content')
<head> 
    @include('components.head')
</head>
<body>
    @include('admin.navbar')

    <div class="container mt-5 pt-5">
        <h2 class="mb-4">Edit Produk</h2>

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

        <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <!-- Nama Produk -->
            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <!-- Deskripsi -->
            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
            </div>

            <!-- Gambar -->
            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                @if($product->image)
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" width="100" class="mb-2">
                @endif
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <!-- Detail Tambahan -->
            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}" required>
            </div>

            <div class="mb-3">
                <label for="wire" class="form-label">Wire</label>
                <input type="text" class="form-control" id="wire" name="wire" value="{{ $product->wire }}" required>
            </div>

            <div class="mb-3">
                <label for="outside" class="form-label">Outside</label>
                <input type="text" class="form-control" id="outside" name="outside" value="{{ $product->outside }}" required>
            </div>

            <div class="mb-3">
                <label for="free_height" class="form-label">Free Height</label>
                <input type="text" class="form-control" id="free_height" name="free_height" value="{{ $product->free_height }}" required>
            </div>

            <div class="mb-3">
                <label for="solid_height" class="form-label">Solid Height</label>
                <input type="text" class="form-control" id="solid_height" name="solid_height" value="{{ $product->solid_height }}" required>
            </div>

            <div class="mb-3">
                <label for="spring_rate" class="form-label">Spring Rate</label>
                <input type="text" class="form-control" id="spring_rate" name="spring_rate" value="{{ $product->spring_rate }}" required>
            </div>

            <!-- Kategori -->
            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}" {{ $product->category_id == $category->id ? 'selected' : '' }}>
                            {{ $category->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>

</body>
@endsection

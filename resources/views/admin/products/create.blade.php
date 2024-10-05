@extends('layouts.app')

@section('content')
<head> 
    @include('components.head')
</head>
<body>
    @include('admin.navbar')

    <div class="container mt-5 pt-5">
        <h2 class="mb-4">Tambah Produk Baru</h2>

        <form action="{{ route('products.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" required></textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Gambar</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>

            <div class="mb-3">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" required>
            </div>

            <div class="mb-3">
                <label for="wire" class="form-label">Wire</label>
                <input type="text" class="form-control" id="wire" name="wire" required>
            </div>

            <div class="mb-3">
                <label for="outside" class="form-label">Outside</label>
                <input type="text" class="form-control" id="outside" name="outside" required>
            </div>

            <div class="mb-3">
                <label for="free_height" class="form-label">Free Height</label>
                <input type="text" class="form-control" id="free_height" name="free_height" required>
            </div>

            <div class="mb-3">
                <label for="solid_height" class="form-label">Solid Height</label>
                <input type="text" class="form-control" id="solid_height" name="solid_height" required>
            </div>

            <div class="mb-3">
                <label for="spring_rate" class="form-label">Spring Rate</label>
                <input type="text" class="form-control" id="spring_rate" name="spring_rate" required>
            </div>

            <div class="mb-3">
                <label for="category_id" class="form-label">Kategori</label>
                <select class="form-select" id="category_id" name="category_id" required>
                    <option value="">Pilih Kategori</option>
                    @foreach($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>

            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>

</body>
@endsection

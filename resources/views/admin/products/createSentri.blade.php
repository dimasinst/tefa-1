@extends('layouts.admin')

@section('content')
<head>
    @include('components.head')
    <style>
        body {
            background-color: #f4f6f9;
            font-family: 'Arial', sans-serif;
        }

        .img-preview {
            max-width: 300px;
            max-height: 200px;
            margin-top: 10px;
            display: none;
            object-fit: contain;
        }

        .container {
            margin-top: 20px;
            max-width: 800px;
        }

        h2 {
            color: #2c3e50;
            font-weight: 600;
            text-align: center;
            margin-bottom: 20px;
        }

        .form-label {
            font-weight: bold;
            color: #333;
        }

        .form-control, .form-select {
            border-radius: 8px;
            padding: 10px;
            background-color: #f9f9f9;
            margin-bottom: 10px;
        }

        .btn {
            background: linear-gradient(135deg, #ff5e5e, #ff9f1c);
            color: white;
            border: none;
            padding: 8px 18px;
            border-radius: 5px;
            transition: background 0.3s ease;
            font-size: 14px;
        }

        .btn:hover {
            background: linear-gradient(135deg, #ff9f1c, #ff5e5e);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>
    <div class="container">
        <h2>Tambah Produk Baru</h2>
        <div class="d-flex justify-content-start mb-4">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark btn-lg">
                <i class="bi bi-arrow-left-circle"></i> Kembali ke Dashboard
            </a>
        </div>

        {{-- Menampilkan alert sukses --}}
        @if(session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        {{-- Menampilkan alert error --}}
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <form action="{{ route('products.sentri.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                {{-- Kolom Kiri --}}
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="name" class="form-label">Nama Produk</label>
                        <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="description" class="form-label">Deskripsi</label>
                        <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description') }}</textarea>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Gambar Produk</label>
                        <input type="file" class="form-control" id="image" name="image" accept="image/*" onchange="previewImage(event)" required>
                        <img id="image-preview" class="img-preview mt-3" src="#" alt="Preview Gambar">
                    </div>
                    <div class="mb-3">
                        <label for="model" class="form-label">Model</label>
                        <input type="text" class="form-control" id="model" name="model" value="{{ old('model') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="wire" class="form-label">Wire</label>
                        <input type="text" class="form-control" id="wire" name="wire" value="{{ old('wire') }}" required>
                    </div>
                </div>
                {{-- Kolom Kanan --}}
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="outside" class="form-label">Outside</label>
                        <input type="text" class="form-control" id="outside" name="outside" value="{{ old('outside') }}" required>
                    </div>
                    <div class="mb-3">
                        <label for="Free_length" class="form-label">Free Length</label>
                        <input type="text" class="form-control" id="Free_length" name="Free_length" required placeholder="Masukkan free length produk">
                    </div>
                    <div class="mb-3">
                        <label for="Initial_Tension" class="form-label">Initial Tension</label>
                        <input type="text" class="form-control" id="Initial_Tension" name="Initial_Tension" required placeholder="Masukkan initial tension produk">
                    </div>
                    <div class="mb-3">
                        <label for="spring_rate" class="form-label">Spring Rate</label>
                        <input type="text" class="form-control" id="spring_rate" name="spring_rate" required placeholder="Masukkan spring rate produk">
                    </div>
                    <div class="mb-3">
                        <label for="category_id" class="form-label">Kategori</label>
                        <select class="form-select" id="category_id" name="category_id" required>
                            <option value="">Pilih Kategori</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                    {{ $category->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="d-grid">
                <button type="submit" class="btn">
                    <i class="fas fa-save me-2"></i> Simpan Produk
                </button>
            </div>
        </form>
    </div>

    <script>
        // Preview gambar
        function previewImage(event) {
            const output = document.getElementById('image-preview');
            output.style.display = 'block';
            output.src = URL.createObjectURL(event.target.files[0]);
        }
    </script>
</body>
@endsection

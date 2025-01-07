<head>
    @include('components.head')
    <style>
        .form-label {
            font-weight: bold;
            color: #333;
        }

        .btn {
            background: linear-gradient(135deg, #ff5e5e, #ff9f1c); /* Red to orange gradient */
            color: white;
            border: none;
            padding: 12px 24px;
            border-radius: 8px;
            transition: background 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background: linear-gradient(135deg, #ff9f1c, #ff5e5e); /* Reversed gradient for hover */
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .form-control {
            padding: 12px;
            border-radius: 10px;
            border: 1px solid #ccc;
            box-shadow: none;
            transition: border-color 0.3s ease, box-shadow 0.3s ease;
        }

        .form-control:focus {
            border-color: #ff5e5e;
            box-shadow: 0 0 5px rgba(255, 94, 94, 0.5);
        }

        .alert {
            margin-bottom: 20px;
            font-size: 1.2rem;
            border-radius: 8px;
        }

        .container {
        max-width: 700px; /* Lebar maksimum container dikurangi */
        margin-top: 30px;
    }

    .form-control {
        padding: 8px; /* Padding input dikurangi */
        font-size: 0.9rem; /* Ukuran font input lebih kecil */
        border-radius: 6px; /* Radius sudut lebih kecil */
    }

    .form-group label {
        font-size: 0.95rem; /* Ukuran font label lebih kecil */
    }

    .btn {
        padding: 10px 20px; /* Ukuran tombol lebih kecil */
        font-size: 0.9rem; /* Ukuran font tombol lebih kecil */
    }

    .section-header {
        font-size: 1.5rem; /* Header lebih kecil */
        margin-bottom: 15px;
    }

        .image-preview {
            max-width: 150px;
            margin-bottom: 10px;
        }

        .form-control-file {
            padding: 10px;
            font-size: 1rem;
        }

        /* Layout 5:5 untuk desktop */
        .form-row {
            display: flex;
            flex-wrap: wrap;
        }

        .form-group {
            flex: 1;
            margin-right: 10px;
            min-width: 45%; /* 45% untuk setiap form */
            margin-bottom: 20px;
        }

        .form-group:nth-child(5) {
            margin-right: 0;
        }

        @media (max-width: 768px) {
            .form-group {
                min-width: 100%; /* 100% untuk mobile, agar form menjadi satu kolom */
            }
        }
    </style>
</head>

<body>
<div class="container mt-5 pt-4">
    <h2 class="section-header">Edit Produk</h2>
    <div class="d-flex justify-content-start mb-4">
        <a href="{{ route('admin.products.index') }}" class="btn btn-dark btn-lg">
            <i class="bi bi-arrow-left-circle"></i> Kembali ke Dashboard
        </a>
    </div>

    <!-- Pesan Sukses -->
    @if(session('success'))
        <div class="alert alert-success">
            <strong>Success!</strong> {{ session('success') }}
        </div>
    @endif

    <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <div class="form-row">
            <!-- Kolom Kiri -->
            <div class="form-group">
                <label for="name" class="form-label">Nama Produk</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $product->name }}" required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Deskripsi</label>
                <textarea class="form-control" id="description" name="description" required>{{ $product->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="model" class="form-label">Model</label>
                <input type="text" class="form-control" id="model" name="model" value="{{ $product->model }}" required>
            </div>

            <div class="form-group">
                <label for="wire" class="form-label">Wire</label>
                <input type="text" class="form-control" id="wire" name="wire" value="{{ $product->wire }}" required>
            </div>

            <div class="form-group">
                <label for="outside" class="form-label">Outside</label>
                <input type="text" class="form-control" id="outside" name="outside" value="{{ $product->outside }}" required>
            </div>

            <!-- Kolom Kanan -->
            <div class="form-group">
                <label for="free_height" class="form-label">Free Height</label>
                <input type="text" class="form-control" id="free_height" name="free_height" value="{{ $product->free_height }}">
            </div>

            <div class="form-group">
                <label for="solid_height" class="form-label">Solid Height</label>
                <input type="text" class="form-control" id="solid_height" name="solid_height" value="{{ $product->solid_height }}">
            </div>

            <div class="form-group">
                <label for="spring_rate" class="form-label">Spring Rate</label>
                <input type="text" class="form-control" id="spring_rate" name="spring_rate" value="{{ $product->spring_rate }}" required>
            </div>

            <div class="form-group">
                <label for="Free_length" class="form-label">Free Length</label>
                <input type="text" class="form-control" id="Free_length" name="Free_length" value="{{ $product->Free_length }}">
            </div>

            <div class="form-group">
                <label for="Initial_Tension" class="form-label">Initial Tension</label>
                <input type="text" class="form-control" id="Initial_Tension" name="Initial_Tension" value="{{ $product->Initial_Tension }}">
            </div>
        </div>

        <!-- Gambar -->
        <div class="form-group">
            <label for="image" class="form-label">Gambar</label>
            @if($product->image)
                <div>
                    <img src="{{ asset('storage/' . $product->image) }}" alt="{{ $product->name }}" class="image-preview">
                </div>
            @endif
            <input type="file" class="form-control-file" id="image" name="image">
        </div>

        <!-- Kategori -->
        <div class="form-group">
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

        <button type="submit" class="btn btn-primary w-100">Update Produk</button>
    </form>
</div>
</body>

@extends('layouts.admin')

@section('content')
<div class="container mt-5">
    <!-- Tombol Back ke Dashboard -->
    <div class="d-flex justify-content-start mb-4">
        <a href="{{ route('admin.dashboard') }}" class="btn btn-dark btn-lg">
            <i class="bi bi-arrow-left-circle"></i> Kembali ke Dashboard
        </a>
    </div>

    <!-- Judul Halaman Produk -->
    <div class="text-center mb-5">
        <h1 class="display-4 text-primary font-weight-bold">Kelola Produk</h1>
        <p class="lead text-muted">Di sini Anda dapat menambahkan, mengedit, atau menghapus produk yang ada.</p>
    </div>

    <!-- Tombol Tambah Produk -->
    <div class="row justify-content-center mb-4">
        <div class="col-md-4 mb-3">
            <a href="{{ route('products.create') }}" class="btn btn-gradient-primary btn-lg w-100">
                <i class="bi bi-gear-fill"></i> Tambah CVT/Valve/Clutch
            </a>
        </div>
        <div class="col-md-4 mb-3">
            <a href="{{ route('products.createSentri') }}" class="btn btn-gradient-secondary btn-lg w-100">
                <i class="bi bi-circle-fill"></i> Tambah Sentri
            </a>
        </div>
    </div>

    <!-- Tabel Produk -->
    <div class="table-responsive">
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="table-primary">
                    <th>Nama Produk</th>
                    <th>Kategori</th>
                    <th class="text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($products as $product)
                    <tr>
                        <td>{{ $product->name }}</td>
                        <td>{{ $product->category->name }}</td>
                        <td class="text-center">
                            <a href="{{ route('admin.products.show', $product->id) }}" class="btn btn-info btn-sm">
                                <i class="bi bi-eye"></i> Detail
                            </a>
                            <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning btn-sm">
                                <i class="bi bi-pencil-square"></i> Edit
                            </a>
                            <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus produk ini?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">
                                    <i class="bi bi-trash"></i> Hapus
                                </button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="3" class="text-center">Tidak ada produk ditemukan.</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
    <div class="d-flex justify-content-center mt-4">
        <nav>
            <ul class="pagination">
                <li class="page-item {{ $products->onFirstPage() ? 'disabled' : '' }}">
                    <a class="page-link" href="{{ $products->previousPageUrl() }}">&laquo; Previous</a>
                </li>
                @for ($i = 1; $i <= $products->lastPage(); $i++)
                    <li class="page-item {{ $products->currentPage() == $i ? 'active' : '' }}">
                        <a class="page-link" href="{{ $products->url($i) }}">{{ $i }}</a>
                    </li>
                @endfor
                <li class="page-item {{ $products->hasMorePages() ? '' : 'disabled' }}">
                    <a class="page-link" href="{{ $products->nextPageUrl() }}">Next &raquo;</a>
                </li>
            </ul>
        </nav>
    </div>

    <!-- Styling CSS -->
    <style>
        /* Tombol Back ke Dashboard */
        .btn-dark {
            background: linear-gradient(45deg, #343a40, #495057);
            color: #fff;
            border: none;
            transition: all 0.3s;
        }

        .btn-dark:hover {
            background: linear-gradient(45deg, #23272b, #343a40);
            box-shadow: 0 5px 15px rgba(52, 58, 64, 0.5);
            transform: translateY(-2px);
        }

        /* Tombol Tambah Produk */
        .btn-gradient-primary {
            background: linear-gradient(45deg, #007bff, #00d4ff);
            color: #fff;
            border: none;
            transition: all 0.3s;
        }

        .btn-gradient-primary:hover {
            background: linear-gradient(45deg, #0056b3, #009edb);
            box-shadow: 0 5px 15px rgba(0, 123, 255, 0.5);
        }

        .btn-gradient-secondary {
            background: linear-gradient(45deg, #6c757d, #adb5bd);
            color: #fff;
            border: none;
            transition: all 0.3s;
        }

        .btn-gradient-secondary:hover {
            background: linear-gradient(45deg, #495057, #6c757d);
            box-shadow: 0 5px 15px rgba(108, 117, 125, 0.5);
        }

        /* Tabel */
        .table {
            font-size: 1rem;
            border-radius: 8px;
        }

        .table-primary th {
            background-color: #007bff;
            color: white;
            text-align: center;
        }

        .table-striped tbody tr:nth-child(odd) {
            background-color: #f8f9fa;
        }

        /* Responsif */
        @media (max-width: 767px) {
            .table th, .table td {
                font-size: 0.9rem;
                padding: 8px;
            }

            .btn-lg {
                font-size: 0.9rem;
                padding: 10px;
            }
        }
    </style>
</div>
@endsection

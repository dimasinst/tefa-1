@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-between mb-4">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark btn-lg">
                <i class="bi bi-arrow-left-circle"></i> Kembali
            </a>
            
            <!-- Icon Notifikasi -->
            <a href="{{ route('admin.resellers.pending') }}" class="btn btn-light position-relative">
                <i class="bi bi-cart-fill"></i>
                @if($pendingCount > 0)
                    <span class="position-absolute top-0 start-100 translate-middle badge rounded-pill bg-danger">
                        {{ $pendingCount }}
                    </span>
                @endif
            </a>
        </div>

        <h3>Reseller yang Sudah Disetujui</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resellers as $index => $reseller)
                    @if($reseller->status == 'approved')
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $reseller->name }}</td>
                            <td>
                                <a href="{{ route('admin.resellers.edit', $reseller->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.resellers.delete', $reseller->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                                <a href="{{ route('admin.resellers.show', $reseller->id) }}" class="btn btn-warning btn-sm px-4 py-2">Detail</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <div class="d-flex justify-content-center mt-4">
            <nav>
                <ul class="pagination">
                    <li class="page-item {{ $resellers->onFirstPage() ? 'disabled' : '' }}">
                        <a class="page-link" href="{{ $resellers->previousPageUrl() }}">&laquo; Previous</a>
                    </li>
                    @for ($i = 1; $i <= $resellers->lastPage(); $i++)
                        <li class="page-item {{ $resellers->currentPage() == $i ? 'active' : '' }}">
                            <a class="page-link" href="{{ $resellers->url($i) }}">{{ $i }}</a>
                        </li>
                    @endfor
                    <li class="page-item {{ $resellers->hasMorePages() ? '' : 'disabled' }}">
                        <a class="page-link" href="{{ $resellers->nextPageUrl() }}">Next &raquo;</a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
@endsection

<style>
    /* General Styles */
    body {
        background-color: #f8f9fa;
        font-family: 'Arial', sans-serif;
    }

    h3 {
        color: #333;
        font-weight: bold;
    }

    /* Table Styles */
    table {
        margin-top: 20px;
        border-collapse: collapse;
    }

    .table th, .table td {
        text-align: center;
        vertical-align: middle;
    }

    .table-hover tbody tr:hover {
        background-color: #f1f1f1;
    }

    /* Notification Icon */
    .btn-light {
        border: 1px solid #ddd;
        transition: box-shadow 0.2s;
    }

    .btn-light:hover {
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
    }

    .position-relative .badge {
        font-size: 0.8rem;
    }

    /* Pagination Styles */
    .pagination .page-item.active .page-link {
        background-color: #333;
        border-color: #333;
    }

    .pagination .page-link {
        color: #333;
    }

    .pagination .page-link:hover {
        background-color: #f1f1f1;
    }

    /* Button Styles */
    .btn-primary {
        background-color: #007bff;
        border: none;
    }

    .btn-primary:hover {
        background-color: #0056b3;
    }

    .btn-danger {
        background-color: #dc3545;
        border: none;
    }

    .btn-danger:hover {
        background-color: #bd2130;
    }

    .btn-warning {
        background-color: #ffc107;
        border: none;
    }

    .btn-warning:hover {
        background-color: #e0a800;
    }
</style>

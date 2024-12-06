@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <div class="d-flex justify-content-start mb-4">
            <a href="{{ route('admin.dashboard') }}" class="btn btn-dark btn-lg">
                <i class="bi bi-arrow-left-circle"></i> Kembali ke Dashboard
            </a>
        </div>

        <h3>Daftar Reseller</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <h4 class="mt-4">Reseller yang Belum Disetujui</h4>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($resellers as $index => $reseller)
                    @if($reseller->status == 'pending')
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td>{{ $reseller->name }}</td>
                            <td>
                                <span class="badge bg-warning text-dark">Pending</span>
                            </td>
                            <td>
                                <form action="{{ route('admin.resellers.approve', $reseller->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-success">Approve</button>
                                </form>
                                <form action="{{ route('admin.resellers.reject', $reseller->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    <button type="submit" class="btn btn-danger">Reject</button>
                                </form>
                                <a href="{{ route('admin.resellers.show', $reseller->id) }}" class="btn btn-warning btn-sm px-4 py-2">Detail</a>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <h4 class="mt-4">Reseller yang Sudah Disetujui</h4>
        <table class="table table-striped table-hover">
            <thead class="table-dark">
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Status</th>
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
                                <span class="badge bg-success">Approved</span>
                            </td>
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
    </div>

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
@endsection
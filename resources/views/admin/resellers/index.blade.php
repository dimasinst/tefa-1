@extends('layouts.admin')

@section('content')
    <div class="container mt-5">
        <h3>Daftar Reseller</h3>

        @if(session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @elseif(session('error'))
            <div class="alert alert-danger">{{ session('error') }}</div>
        @endif

        <h4>Reseller yang Belum Disetujui</h4>
        <table class="table">
            <thead>
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
                                <span class="badge badge-warning">Pending</span>
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
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>

        <h4>Reseller yang Sudah Disetujui</h4>
        <table class="table">
            <thead>
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
                                <span class="badge badge-success">Approved</span>
                            </td>
                            <td>
                                <a href="{{ route('admin.resellers.edit', $reseller->id) }}" class="btn btn-primary">Edit</a>
                                <form action="{{ route('admin.resellers.delete', $reseller->id) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endif
                @endforeach
            </tbody>
        </table>
    </div>
@endsection

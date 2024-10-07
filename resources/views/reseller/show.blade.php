@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-5">
    <h2 class="mb-4">{{ $reseller->name }}</h2>
    <div class="card p-4 shadow">
        <div class="mb-3">
            <strong>Provinsi:</strong> {{ $reseller->province }}
        </div>
        <div class="mb-3">
            <strong>Kota:</strong> {{ $reseller->city }}
        </div>
        <div class="mb-3">
            <strong>Alamat:</strong> {{ $reseller->alamat }}
        </div>
        <div class="mb-3">
            <strong>Kode Pos:</strong> {{ $reseller->kodepos }}
        </div>
        <div class="mb-3">
            <strong>Telepon:</strong> 
            <a href="https://wa.me/{{ $reseller->phone }}" target="_blank" class="text-primary">
                {{ $reseller->phone }}
            </a>
        </div>
        <a href="{{ route('resellers.index') }}" class="btn btn-secondary">Kembali</a>
    </div>
</div>
@endsection

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Application Title</title>
    @include('components.head') <!-- Menginclude komponen head jika ada -->
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- Ganti dengan path CSS Anda -->
</head>
<body>
    
    <div class="container">
        @yield('content') <!-- Tempat konten halaman akan ditampilkan -->
    </div>


    <script src="{{ asset('js/app.js') }}"></script> <!-- Ganti dengan path JS Anda -->
</body>
</html>


<nav class="navbar navbar-expand-lg fixed-top" style="background: linear-gradient(to right, #ff0000, #ffcc00);">
    <div class="container-fluid">
        <!-- Judul MTN SPRING di sebelah kiri dengan warna mencolok -->
        <a class="navbar-brand" href="#" style="font-family: 'Poppins', sans-serif; font-weight: bold; color: #ffffff; font-size: 1.75rem; padding-left: 20px; text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5);">
            MTN SPRING
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('sales.contact') }}">Inquery</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('categories.cvt') }}">Products</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('reseller.index') }}">Partners</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('other.index') }}">Other</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('success'))
<script>
    Swal.fire("{{ $message }}");
</script>
@endif

<style>
    /* Menggunakan font Poppins untuk navbar */
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap');
.navbar-nav{
    margin: 0 auto; /* Menempatkan navbar di tengah */
    display: flex;
    justify-content: end; /* Untuk memastikan link berada di tengah */
    width: 100%;
}
.nav-link {
    position: relative;
    color: #fff; /* Warna teks navbar default (putih) */
    font-size: 0.9rem; /* Ukuran font */
    font-weight: 500; /* Ketebalan font */
    transition: color 0.3s ease, background-color 0.3s ease, transform 0.3s ease;
}

    .navbar-nav .nav-link {
        color: white; /* Warna teks default navbar */
        transition: color 0.3s ease;
        font-family: sans-serif; /* Menggunakan font Poppins */
    }

    .navbar-nav .nav-link:hover {
        color: #ffcc00; /* Warna kuning saat hover */
    }

    .navbar-brand {
        font-family: 'Poppins', sans-serif; /* Menggunakan font Poppins untuk brand */
        font-weight: 700;
        font-size: 1.75rem; /* Ukuran font untuk judul */
        color: #ff6600; /* Warna mencolok untuk judul */
        padding-left: 20px; /* Memberikan jarak ke kiri */
        margin-right: 15px; /* Memberikan sedikit jarak di sisi kanan */
        text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.5); /* Efek bayangan untuk meningkatkan visibilitas */
    }

    .navbar-toggler-icon {
        background-color: #ff6600; /* Ubah warna icon toggler */
    }

.nav-link:hover {
    color: #FFD700; /* Warna kuning saat hover (berikan efek menonjol) */
    background-color: #ff5733; /* Warna latar belakang saat hover, bisa disesuaikan dengan aksen oranye */
    border-radius: 10px; /* Efek border-radius saat hover */
    transform: scale(1.05); /* Efek zoom saat hover */
}

/* Navbar aktif */


</style>

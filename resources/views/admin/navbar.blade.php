<nav class="navbar navbar-expand-lg bg-warning fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="MTN" width="30" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <form class="d-flex ms-auto me-3" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Cari</button>
            </form>
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST" style="display:inline;">
                        @csrf
                        <button type="submit" class="nav-link" style="border: none; background: none; cursor: pointer;">Logout</button>
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('success'))
<script>Swal.fire("{{ $message }}");</script>
@endif
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const searchInput = document.getElementById('search-input');
        const products = document.querySelectorAll('.card'); // Ambil semua elemen produk
        const noResultsMessage = document.createElement('p'); // Pesan untuk tidak ada hasil

        searchInput.addEventListener('keyup', function () {
            const searchTerm = searchInput.value.toLowerCase(); // Ambil nilai dari input
            let found = false; // Variabel untuk cek apakah ada produk yang ditemukan

            noResultsMessage.remove(); // Hapus pesan tidak ada hasil sebelumnya

            products.forEach(product => {
                const title = product.querySelector('.card-title').textContent.toLowerCase();
                const description = product.querySelector('.card-text').textContent.toLowerCase();

                // Cek apakah title atau description mengandung searchTerm
                if (title.includes(searchTerm) || description.includes(searchTerm)) {
                    product.parentElement.style.display = ''; // Tampilkan produk
                    found = true; // Menandakan ada produk yang ditemukan
                } else {
                    product.parentElement.style.display = 'none'; // Sembunyikan produk
                }
            });

            if (!found) {
                noResultsMessage.textContent = 'Tidak ada produk ditemukan.'; // Pesan tidak ada hasil
                noResultsMessage.classList.add('text-center', 'mt-3');
                document.querySelector('.tab-content').appendChild(noResultsMessage); // Tampilkan pesan
            }
        });
    });
</script>




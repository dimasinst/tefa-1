<nav class="navbar navbar-expand-lg bg-warning fixed-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="MTN" width="30" height="24">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="{{ route('auth.logout') }}" method="POST">
                <li class="nav-item">
                    @csrf
                    <button type="submit" class="nav-link">Logout</button>
                </li>
            </form>
        </div>
    </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@if ($message = Session::get('succes'))
    <Script>
        Swal.fire("{{ $message }}");
    </Script>
@endif

<!DOCTYPE html> 
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MTN SPRING</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<nav class="navbar navbar-expand-lg bg-warning fixed-top shadow-sm">
    <div class="container-fluid">
        <a class="navbar-brand d-flex align-items-center" href="#">
            <img src="/docs/5.3/assets/brand/bootstrap-logo.svg" alt="MTN" width="40" height="30" class="d-inline-block align-text-top">
            <span class="ms-2 fw-bold fs-5 text-dark">MTN SPRING</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
<<<<<<< HEAD
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <form action="{{ route('auth.logout') }}" method="POST">
                <li class="nav-item">
                    @csrf
                    <button type="submit" class="nav-link">Logout</button>
                </li>
=======
        <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
            <form action="{{ route('auth.logout')}}" method="POST">
                @csrf
                <button type="submit" class="btn btn-danger">Log Out</button>
>>>>>>> 6c663bf (menambahkan crud setengah jadi)
            </form>
        </div>
    </div>
    </div>
</nav>

<div class="container mt-5 pt-5">
    <div class="row">
        <div class="col-md-3">
            <div class="list-group">
                <a href="{{ route('dashboard') }}" class="list-group-item list-group-item-action active" aria-current="true">
                    Dashboard
                </a>
            </div>
        </div>

        <div class="col-md-9">
            <h2 class="mb-4">Admin Control Panel</h2>

            <!-- Button to trigger modal -->
            <div class="mb-3">
                <button class="btn btn-success me-2" data-bs-toggle="modal" data-bs-target="#createModal">
                    <i class="bi bi-plus-circle"></i> Create
                </button>
            </div>

            <!-- Modal for creating product -->
            <div class="modal fade" id="createModal" tabindex="-1" aria-labelledby="createModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="createModalLabel">Create Product</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form id="createProductForm" action="{{ route('products.store') }}" method="POST">
                                @csrf
                                <div class="mb-3">
                                    <label for="name" class="form-label">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" required>
                                </div>
                                <div class="mb-3">
                                    <label for="description" class="form-label">Description</label>
                                    <textarea class="form-control" id="description" name="description" required></textarea>
                                </div>
                                <div class="mb-3">
                                    <label for="pnp" class="form-label">PNP</label>
                                    <input type="text" class="form-control" id="pnp" name="pnp" required>
                                </div>
                                <div class="mb-3">
                                    <label for="category_id" class="form-label">Category</label>
                                    <select class="form-select" id="category_id" name="category_id" required>
                                        <option value="">Select Category</option>
                                        @foreach($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Create</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table -->
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="table-light">
                        <tr>
                            <th>#</th>
                            <th>Name</th>
                            <th>Description</th>
                            <th>Pnp</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $product)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $product->name }}</td>
                                <td>{{ $product->description }}</td>
                                <td>{{ $product->pnp }}</td>
                                <td>
                                    <a href="{{ route('products.edit', parameters: $product->id) }}" class="btn btn-primary btn-sm">Edit</a>
                                    <form action="{{ route('products.destroy', $product->id) }}" method="POST" style="display:inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<<<<<<< HEAD
@if ($message = Session::get('succes'))
    <Script>
        Swal.fire("{{ $message }}");
    </Script>
@endif
=======
@if ($message = Session::get('success'))
<script>
    Swal.fire({
        icon: 'success',
        title: 'Success',
        text: "{{ $message }}",
        showConfirmButton: false,
        timer: 3000
    });
</script>
@endif

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
>>>>>>> 6c663bf (menambahkan crud setengah jadi)

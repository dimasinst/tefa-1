<head>
    @include('components.head')
</head>
<body>
    @include('admin.navbar')

    <div class="container mt-5 pt-5">
        <div class="row">
            
            

            <div class="col-md-9">
                <h2 class="mb-4">Admin Dashboard</h2>
    
              
                <div class="mb-3">
                    <button class="btn btn-success me-2" onclick="Swal.fire('Create Operation')">
                        <i class="bi bi-plus-circle"></i> Create
                    </button>
                    
                </div>
                <div class="table-responsive">
                    <table class="table table-bordered">
                        <thead class="table-light">
                            <tr>
                                <th>Nama Produk</th>
                                <th>Deskripsi Item</th>
                                <th>Images</th>
                                <th>Action</th>
                                
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                
                                <td>
                                    <button class="btn btn-primary btn-sm">Read</button>
                                    <button class="btn btn-warning btn-sm">Edit</button>
                                    <button class="btn btn-danger btn-sm">Delete</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    @if ($message = Session::get('succes'))
        Swal.fire({
            icon: 'success',
            title: 'Success',
            text: "{{ $message }}",
            showConfirmButton: false,
            timer: 3000
        });
    @endif
</script>

    
    

</body>
@include('components.footer')
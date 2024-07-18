@extends('components.layouts.admin.app')

@section('title', 'Dashboard Kategori')

@section('content')
    <main class="app-main mt-5">
        <div class="app-content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow-card  mb-4">
                    <div class="card-header py-3 d-flex">
                        <h5 class="m-0 fw-bold"> Category</h5>
                        <a href="{{ route('admin.kategori.create') }}"
                            class="btn btn-primary btn-md position-relative d-block ms-auto me-0"
                            style="background-color: #00A3FF; border: none;">Create Category</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive" id="dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Name</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{ $item->name_kategori }}</td>
                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('admin.kategori.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm mb-2" style="margin-right: 1rem; ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route('admin.kategori.delete', $item->id) }}"
                                                    class="btn btn-danger btn-sm mb-2" id="id-delete">
                                                    <i class="fas fa-trash"></i> Delete
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container-fluid -->
        </div>
    </main>
@endsection

@push('prepend-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@push('addon-script')
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const deleteButtons = document.querySelectorAll('#id-delete');

            deleteButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent the default anchor click behavior

                    const url = this.href; // Get the URL from the button's href attribute

                    Swal.fire({
                        title: 'Hapus Data',
                        text: "Apakah Anda Yakin Ingin Hapus Data?",
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#3085d6',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Yes',
                        cancelButtonText: 'TIdak'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            // If confirmed, redirect to the delete URL
                            window.location.href = url;
                        }
                    });
                });
            });
        });
    </script>
@endpush

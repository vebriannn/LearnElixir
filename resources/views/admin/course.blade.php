@extends('components.layouts.admin.app')

@section('title', 'Dashboard Course')

@push('prepend-style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="{{ asset('learnelixir/assets/css/superadmin&mentor.css') }}">
@endpush

@section('content')
    <main class="app-main mt-5">
        <!--begin::App Content Header-->
        {{-- <div class="app-content-header">
        <!--begin::Container-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-6">
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-end">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Course
                        </li>
                    </ol>
                </div>
            </div>
        </div>
        <!--end::Container-->
    </div> --}}
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow-card  mb-4">
                    <div class="card-header py-3 d-flex">
                        <h5 class="m-0 fw-bold"> Data Course</h5>
                        <a href="{{ route('admin.course.create') }}"
                            class="btn btn-primary btn-md position-relative d-block ms-auto me-0"
                            style="background-color: #00A3FF; border: none;">Create Course</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive" id="dataTable">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Deskripsi</th>
                                        <th>Mentor</th>
                                        <th>Image</th>
                                        <th>Duration</th>
                                        <th>Total Lesson</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items->course as $item)
                                        <tr>
                                            <td>
                                                <p>{{ $item->kategori }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->title }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->slug }}</p>
                                            </td>
                                            <td style="width: 40%;">
                                                <p>{{ $item->deskripsi }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $items->name }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->images }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->duration }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->total_lesson }}</p>
                                            </td>

                                            <td class="d-flex justify-content-center">
                                                <a href="{{ route('admin.lesson', $item->id) }}"
                                                    class="btn btn-success btn-sm mb-2" style="margin-right: 1rem; ">
                                                    View Lesson
                                                </a>
                                                <a href="{{ route('admin.course.edit', $item->id) }}"
                                                    class="btn btn-warning btn-sm mb-2" style="margin-right: 1rem; ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route('admin.course.delete', $item->id) }}"
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
        <!-- End of Main Content -->
    </main>

@endsection

@push('prepend-script')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <!-- DataTables JS -->
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endpush
@push('addon-script')
    <script>
        $(document).ready(function() {
            $('#coursetable').DataTable();
        });
    </script>
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

@extends('components.layouts.admin.app')

@section('title', 'Course')

@push('prepend-style')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
@endpush

@section('content')
    <main class="app-main">

        <!--begin::App Content-->
        <div class="app-content mt-4">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow mb-4">
                    <div class="card-header m-0 d-flex justify-content-between slign-items-center w-100 " style="after">
                        <h3 class="m-0 fw-bold">Data Course</h3>
                        <a href="{{ route('admin.course.create') }}" class="btn btn-primary">Create Course</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive display" id="coursetable">
                                <thead>
                                    <tr>
                                        <th>Kategori</th>
                                        <th>Title</th>
                                        <th>Slug</th>
                                        <th>Deskripsi</th>
                                        <th>Mentor</th>
                                        <th>Image</th>
                                        <th>Link</th>
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
                                                <p style="color:blue; text-decoration: underline;">{{ $item->link }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->duration }}</p>
                                            </td>
                                            <td>
                                                <p>{{ $item->total_lesson }}</p>
                                            </td>

                                            <td class="d-flex justify-content-center">
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

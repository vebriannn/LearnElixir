@extends('components.layouts.admin.app')

@section('title', 'Dashboard Sources')

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('learnelixir/assets/css/superadmin&mentor.css') }}">
@endpush


@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-6">
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.course') }}">Course</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.lesson', $id_course) }}">Lesson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Source Kelas
                            </li>
                        </ol>
                    </div>
                </div>
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!-- Begin Page Content -->
            <div class="container-fluid">
                <!-- DataTales Example -->
                <div class="card shadow-card  mb-4">
                    <div class="card-header py-3 d-flex">
                        <h5 class="m-0 fw-bold">Sources</h5>
                        <a href="{{route('admin.sources.create', ['id_course' => $id_course, 'id_lesson' => $id_lesson])}}" class="btn btn-primary btn-md position-relative d-block ms-auto me-0"
                            style="background-color: #00A3FF; border: none;" ">Create Sources</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive" id="dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Nama Video</th>
                                        <th scope="col">Durasi Video</th>
                                        <th scope="col">Link Video</th>
                                        <th scope="col">Acion</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($sources as $item)
                                        <tr>
                                            <td>{{$item->name_source}}</td>
                                            <td>{{$item->time_source}}</td>
                                            <td>{{$item->link_source}}</td>
                                            <td>
                                                <a href="{{ route('admin.sources.edit',  ['id_course' => $id_course, 'id_lesson' => $id_lesson, 'id_sources' => $item->id]) }}"
                                                    class="btn btn-warning btn-sm mb-2" style="margin-right: 1rem; ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route('admin.sources.delete', ['id_course' => $id_course, 'id_lesson' => $id_lesson, 'id_sources' => $item->id]) }}"
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
        </div>
    </main>
@endsection

@push('prepend-script')
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
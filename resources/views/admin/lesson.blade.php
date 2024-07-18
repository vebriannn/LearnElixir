@extends('components.layouts.admin.app')

@section('title', 'Dashboard Lesson')

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
                            <li class="breadcrumb-item active" aria-current="page">
                                Lesson
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
                        <h5 class="m-0 fw-bold">Lesson</h5>
                        <a href="{{route('admin.lesson.create', $id)}}" class="btn btn-primary btn-md position-relative d-block ms-auto me-0"
                            style="background-color: #00A3FF; border: none;" ">Create Lesson</a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered table-responsive" id="dataTable">
                                <thead>
                                    <tr>
                                        <th scope="col">Title</th>
                                        <th scope="col" style="width: 20%;">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($items as $item)
                                        <tr>
                                            <td>{{$item->title_lesson}}</td>
                                            <td>
                                                <a href="{{ route('admin.lesson', $item->id) }}"
                                                    class="btn btn-success btn-sm mb-2" style="margin-right: 1rem; ">
                                                    View Sources
                                                </a>
                                                <a href="{{ route('admin.lesson.edit',  ['id' => $id, 'id_lesson' => $item->id]) }}"
                                                    class="btn btn-warning btn-sm mb-2" style="margin-right: 1rem; ">
                                                    <i class="fas fa-edit"></i> Edit
                                                </a>
                                                <a href="{{ route('admin.lesson.delete', ['id' => $id, 'id_lesson' => $item->id]) }}"
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

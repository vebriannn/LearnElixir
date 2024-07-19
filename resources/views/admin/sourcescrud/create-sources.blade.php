@extends('components.layouts.admin.app')

@section('title', 'Create Sources')

@section('content')
    <main class="app-main">
        <!--begin::App Content Header-->
        <div class="app-content-header">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <div class="col-sm-6">

                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-end">
                            <li class="breadcrumb-item"><a href="{{ route('admin.course') }}">Course</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.lesson', $id_course) }}">Lesson</a></li>
                            <li class="breadcrumb-item"><a href="{{ route('admin.sources', ['id_course' => $id_course, 'id_lesson' => $id_lesson]) }}">Source Kelas</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create Sources
                            </li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <!-- Begin Page Content -->
                    <div class="card mx-3">
                        <div class="card-header">
                            <h4>Create Sources</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="{{ route('admin.sources.create.store', ['id_course' => $id_course, 'id_lesson' => $id_lesson]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 me-3">
                                        <label for="">Nama Video</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" name="name_source">
                                            <label for="floatingInputGrid">Nama Video</label>
                                            @error('name_source')
                                                <span style="color: red">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 me-3 mt-3">
                                        <label for="">Durasi Video</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" name="time_source">
                                            <label for="floatingInputGrid">Durasi Video</label>
                                            @error('time_source')
                                                <span style="color: red">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="col-12 me-3 mt-3">
                                        <label for="">Link Video</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" name="link_source">
                                            <label for="floatingInputGrid">Link Video</label>
                                            @error('link_source')
                                                <span style="color: red">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div>
                                        <button class="btn btn-primary my-5" type="Submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
        </div>
        </div>
    </main>
@endsection

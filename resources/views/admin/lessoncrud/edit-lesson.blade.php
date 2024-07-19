@extends('components.layouts.admin.app')

@section('title', 'Create Lesson')

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
                            <li class="breadcrumb-item"><a href="{{ route('admin.lesson', ['id_course' => $id_course]) }}">Lesson</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Edit Lesson
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
                            <h4>Create Lesson</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="{{ route('admin.lesson.edit.update', ['id_course' => $id_course, 'id_lesson' => $id_lesson]) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="col-12 me-3">
                                        <label for="">Title Lesson</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" name="title_lesson" value="{{$lesson->title_lesson}}">
                                            <label for="floatingInputGrid">title Lesson</label>
                                            @error('title_lesson')
                                                <span style="color: red">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                            </div>
                            <div>
                                <button class="btn btn-primary my-5" type="Submit">Submit</button>
                            </div>
                            </form>
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

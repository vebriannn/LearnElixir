@extends('components.layouts.admin.app')

@section('title', 'Create Course')

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
                            <li class="breadcrumb-item active" aria-current="page">
                                Create Course
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
                            <h4>Create Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="{{ route('admin.course.create.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 me-3">
                                        <label for="">Title</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" name="title">
                                            <label for="floatingInputGrid">Title</label>
                                            @error('title')
                                                <span style="color: red">
                                                    {{ $message }}
                                                </span>
                                            @enderror
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-4">
                                        <div class="col-md me-3">
                                            <label for="image">Upload Image</label>
                                            <div class="form-group col-6 mt-2">
                                                <input type="file" class="form-control-file" id="image"
                                                    aria-describedby="imageHelp" name="images">
                                                @error('images')
                                                    <span style="color: red">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-4">
                                        <div class="col-6 mt-3">
                                            <label for="">Duration</label>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid"
                                                    placeholder="name@example.com" name="duration">
                                                <label for="floatingInputGrid">Duration</label>
                                                @error('duration')
                                                    <span style="color: red">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-6 mt-3">
                                            <label for="">Lesson</label>
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid"
                                                    placeholder="name@example.com" name="total_lesson">
                                                <label for="floatingInputGrid">Lesson</label>
                                                @error('total_lesson')
                                                    <span style="color: red">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-3">
                                        <div class="col-12">
                                            <label for="">Deskripsi</label>
                                            <div class="form-floating">
                                                <textarea class="form-control" id="floatingTextareaGrid" placeholder="name@example.com" style="height: 200px"
                                                    name="deskripsi"></textarea>
                                                <label for="floatingTextareaGrid">Deskripsi</label>
                                                @error('deskripsi')
                                                    <span style="color: red">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                    </div>
                            </div>
                            <div class="form-group mt-4">
                                <label>Kategori</label>
                                <div class="row mb-3 ml-1">
                                    @foreach ($kategori as $item)
                                        <div class="col-4">
                                            <div class="form-check">
                                                <input class="form-check-input" type="radio" name="kategori"
                                                    id="option1" {{ $item->id == $checked ? 'checked' : '' }}
                                                    value="{{ $item->name_kategori }}">
                                                <label class="form-check-label"
                                                    for="optionx1">{{ $item->name_kategori }}</label>
                                            </div>
                                        </div>
                                    @endforeach
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

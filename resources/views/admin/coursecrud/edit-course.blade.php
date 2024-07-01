@extends('components.layouts.admin.app')

@section('title', 'Edit Course')

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
                                Edit Course
                            </li>
                        </ol>
                    </div>
                </div>
                <!--end::Row-->
            </div>
            <!--end::Container-->
        </div>
        <!--end::App Content Header-->
        <!--begin::App Content-->
        <div class="app-content">
            <!--begin::Container-->
            <div class="container-fluid">
                <!--begin::Row-->
                <div class="row">
                    <!-- Begin Page Content -->
                    <div class="card mx-3">
                        <div class="card-header d-flex justify-content-between">
                            <h4 style="font-weight: bold">Edit Course</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="{{ route('admin.course.edit.update', $items->id) }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    @method('PUT')
                                    <div class="row g-2">
                                        <div class="col-md me-3">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="floatingInputGrid"
                                                    placeholder="name@example.com" name="title"
                                                    value="{{ $items->title }}">
                                                <label for="floatingInputGrid">Title</label>
                                                @error('title')
                                                    <span style="color: red">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                        <div class="col-md ms-3">
                                            <div class="form-floating">
                                                <div class="form-floating">
                                                    <input type="text" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="{{ $items->mentor }}"
                                                        name="mentor">
                                                    <label for="floatingInputGrid">Mentor</label>
                                                    @error('mentor')
                                                        <span style="color: red">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-4">
                                        <div class="col-md me-3">
                                            <div class="form-group col-6 mt-2">
                                                <label for="image">Upload Image</label>
                                                <input type="file" class="form-control-file" id="image"
                                                    aria-describedby="imageHelp" name="images">

                                            </div>
                                        </div>
                                        <div class="col-md ms-3">
                                            <div class="form-floating">
                                                <div class="form-floating">
                                                    <input type="url" class="form-control" id="floatingInputGrid"
                                                        placeholder="name@example.com" value="{{ $items->link }}" name="link">
                                                    <label for="floatingInputGrid">Link</label>
                                                    @error('link')
                                                        <span style="color: red">
                                                            {{ $message }}
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row g-2 mt-4">
                                        <div class="col-md-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" id="floatingTextareaGrid" placeholder="Deskripsi " style="height: 200px"
                                                    name="deskripsi">{{ $items->deskripsi }}</textarea>
                                                <label for="floatingTextareaGrid">Deskripsi</label>
                                                @error('deskripsi')
                                                    <span style="color: red">
                                                        {{ $message }}
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label>Kategori</label>
                                        <div class="row mb-3 ml-1">
                                            <div class="col-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kategori"
                                                        id="option1"
                                                        {{ $items->kategori == 'frontend' ? 'checked' : '' }}
                                                        value="frontend">
                                                    <label class="form-check-label" for="option1">Front End</label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kategori"
                                                        id="option2"{{ $items->kategori == 'backend' ? 'checked' : '' }}
                                                        value="backend">
                                                    <label class="form-check-label" for="option2">Back End</label>
                                                </div>
                                            </div>
                                            <div class="col-4">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio" name="kategori"
                                                        id="option3"
                                                        {{ $items->kategori == 'fullstack' ? 'checked' : '' }}
                                                        value="fullstack">
                                                    <label class="form-check-label" for="option3">FullStack</label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div>
                                        <button type="submit" class="btn btn-primary my-5">Submit</button>
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
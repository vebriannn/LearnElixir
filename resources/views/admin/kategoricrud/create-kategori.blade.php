@extends('components.layouts.admin.app')

@section('title', 'Create Kategori')

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
                            <li class="breadcrumb-item"><a href="{{ route('admin.kategori') }}">Kategori</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Create Kategori
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
                            <h4>Create Kategori</h4>
                        </div>
                        <div class="card-body">
                            <div class="container-fluid">
                                <form action="{{ route('admin.kategori.create.store') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="col-12 me-3">
                                        <label for="">Name Kategori</label>
                                        <div class="form-floating">
                                            <input type="text" class="form-control" id="floatingInputGrid"
                                                placeholder="name@example.com" name="name_kategori">
                                            <label for="floatingInputGrid">Name Kategori</label>
                                            @error('name_kategori')
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

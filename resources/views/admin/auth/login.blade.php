@extends('components.layouts.auth.app')

@section('title', 'Login')

@push('prepend-style')
    <link rel="stylesheet" href="{{ asset('learnelixir/assets/css/login.css') }}">
@endpush

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-6 mt-4 d-none d-sm-flex">
                <div class="card my-auto">
                    <img src="{{ asset('learnelixir/assets/image/3D img.png') }}" class="m-auto" alt="">
                </div>
            </div>
            <div class="col-12  col-sm-6 mt-4 mt-sm-0 d-flex">
                <div class="content ms-0 ms-md-5 ms-sm-0  " style="width: 100%;">
                    <h1 class="fw-bold">HELLO ADMIN, <br> WELCOME TO <span style="color: #407C95;">Learn</span><span>Elixir</span>
                    </h1>
                    <form method="POST" action="{{ route('admin.login.auth') }}">
                        @csrf
                        <div class="form-group mt-lg-5 mt-md-3 mt-sm-2">
                            <label for="email">Email</label>
                            <input type="email" class="form-control mt-lg-2 mt-md-1" id="email"
                                placeholder="Enter your Email" name="email">
                            @if ($errors->has('email'))
                                <span>{{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group mt-lg-3 mt-md-1 mt-sm-2">
                            <label for="password">Password</label>
                            <input type="password" class="form-control mt-lg-2 mt-md-1" id="password"
                                placeholder="Enter your password" name="password">
                            @if ($errors->has('password'))
                                <span>{{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary mt-lg-4 mt-md-3 mt-sm-3 mt-3 fw-bold"
                            style="width: 100%;">Continue</button>
                    </form>
                    
                </div>
            </div>
        </div>
    </div>
@endsection

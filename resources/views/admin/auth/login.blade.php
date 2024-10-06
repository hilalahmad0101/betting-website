@extends('layouts.guest')
@section('title')
    Login
@endsection
@section('content')
    <div class="login-main" style="background-image: url('https://script.viserlab.com/betlab/assets/admin/images/login.jpg')">
        <div class="container custom-container">
            <div class="row justify-content-center">
                <div class="col-xxl-5 col-xl-5 col-lg-6 col-md-8 col-sm-11">
                    <div class="login-area">
                        <div class="login-wrapper">
                            <div class="login-wrapper__top">
                                <h3 class="title text-white">Welcome to <strong>Betlab</strong></h3>
                                <p class="text-white">Admin Login to Betlab
                                    Dashboard</p>
                            </div>
                            <div class="login-wrapper__body">
                                <form action="{{ route('admin.make.login') }}" method="POST"
                                    class="cmn-form mt-30 verify-gcaptcha login-form">
                                    @csrf
                                    <div class="form-group">
                                        <label>Username</label>
                                        <input type="text" class="form-control" name="email" value="{{ old('email') }}" required>
                                        @error('email')
                                            <span class="text-danger">{{ $message }}</span>

                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <div class="d-flex justify-content-between">
                                            <label>Password</label>
                                            {{-- <a href="https://script.viserlab.com/betlab/admin/password/reset"
                                                class="forget-text">Forgot Password?</a> --}}
                                        </div>
                                        <input type="password" class="form-control" name="password" required>
                                        @error('password')
                                            <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <button type="submit" class="btn cmn-btn w-100">LOGIN</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

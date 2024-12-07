@extends('admin.layouts.main')
@section('title', 'Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center justify-align-center">
            <div class="col-md-8">
                <div class="row wapper-login">
                    <div class="col-md-6">
                        <div class="login-card">
                            <h3 class="mb-4">Login</h3>
                            <form method="POST" action="{{ route('admin.login.submit') }}">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control" name="email" placeholder="" required>
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label">Password</label>
                                    <input type="password" class="form-control" name="password" placeholder="" required>
                                </div>
                                <div class="mb-3 form-check">
                                    <input type="checkbox" class="form-check-input" name="remember">
                                    <label class="form-check-label" for="remember">Remember me</label>
                                </div>
                                <button type="submit" class="btn btn-primary w-100">Login</button>
                            </form>
                            <div class="text-center mt-3">
                                <a href="#">Forgot password?</a>
                            </div>
                            <div class="text-center mt-3">
                                <p>Don't have an account? <a href="#">Sign up</a></p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 align-self-center justify-content-center">
                        <img class="img-fluid" src="{{ asset('images/login-img.png') }}" alt="" srcset="">
                    </div>
                </div>
                
            </div>
        </div>
    </div>
@endsection
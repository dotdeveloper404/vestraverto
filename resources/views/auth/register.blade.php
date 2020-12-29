@extends('layouts.app')

@section('content')
<div class="login-page2 animat-rate">
    <div class="login-content-main">
        <div class="login-content2">
            <div class="theme-tab">
                <ul class="nav nav-tabs">
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">login</a></li>
                    <li class="nav-item"><a href="{{ asset('register') }}" class="nav-link active">Signup</a></li>
                </ul>
            </div>
        </div>
        <div class="login-content">
            <div class="login-content-header">
                <img class="img-fluid" src="{{ asset('theme/assets/images/logo/vestra-logo.png') }}">
            </div>
            <h3>Please signup to your account.</h3>
            <form action="{{ route('register') }}" method="POST" class="form2">
                @csrf
                <div class="form-group">
                    <label class="col-form-label" for="name">Full Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}">
                    @error('name')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="email">Email Address</label>
                    <input type="email" name="email" id="email" class="form-control" value="{{ old('email') }}">
                    @error('email')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="password">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                    @error('password')
                        <span class="invalid-feedback">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
                </div>
                <div class="form-group mb-0">
                    <div class="buttons">
                        <button type="submit" class="btn button-effect btn-primary">Signup</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
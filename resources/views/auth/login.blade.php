@extends('layouts.app')

@section('content')
<div class="login-page2 animat-rate">
    <div class="login-content-main">
        <div class="login-content2">
            <div class="theme-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link active">login</a></li>
                    <li class="nav-item"><a href="{{ asset('register') }}" class="nav-link">Signup</a></li>
                </ul>
            </div>
        </div>
        <div class="login-content">
            <div class="login-content-header">
                <img class="img-fluid" src="{{ asset('theme/assets/images/logo/vestra-logo.png') }}">
            </div>
            <h3>Login to your account.</h3>
            <form class="form2" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="col-form-label" for="email">Email Address</label>
                    <input type="email" name="email"  id="email" class="form-control">
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="password">Password</label>
                    <input type="password" name="password"  id="password" class="form-control">
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="rememberchk">
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            <label class="form-check-label" for="remember">Remember Me.</label>
                            <a href="{{ route('password.request') }}">Forgot Password?</a>
                        </div>
                    </div>
                </div>
                <div class="form-group mb-0">
                    <div class="buttons">
                        <button type="submit" class="btn button-effect btn-primary">Login</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
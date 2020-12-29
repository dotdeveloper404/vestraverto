@extends('layouts.app')

@section('content')
<div class="login-page2 animat-rate">
    <div class="login-content-main">
        <div class="login-content">
            <div class="login-content-header">
                <img class="img-fluid" src="{{ asset('theme/assets/images/logo/vestra-logo.png') }}">
            </div>
            <h3>Reset your account password.</h3>
            <form method="POST" action="{{ route('password.update') }}" class="form2">
                @csrf
                <input type="hidden" name="token" value="{{ $token }}">
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
                    <label class="col-form-label" for="password_confirmation">Confirm Password</label>
                    <input type="password" name="password_confirmation"  id="password_confirmation" class="form-control">
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
                <div class="form-group mb-0">
                    <div class="buttons">
                        <button type="submit" class="btn button-effect btn-primary">Reset Password</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

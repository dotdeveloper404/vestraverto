@extends('layouts.app')

@section('content')
<div class="login-page2 animat-rate">
    <div class="login-content-main">
        <div class="login-content">
            <div class="login-content-header">
                <img class="img-fluid" src="{{ asset('theme/assets/images/logo/vestra-logo.png') }}">
            </div>
            <h3>Reset your account password.</h3>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <form method="POST" action="{{ route('password.email') }}" class="form2">
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
                <div class="form-group mb-0">
                    <div class="buttons">
                        <button type="submit" class="btn button-effect btn-primary">Send Password Reset Link</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

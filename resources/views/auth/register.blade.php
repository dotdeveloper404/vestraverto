@extends('layouts.app')

@section('content')

<div class="login-page2 animat-rate">
    <div class="login-content-main">
        <div class="login-content2">
            <div class="theme-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link" id="login-tab" data-toggle="tab" href="/login" role="tab"
                            aria-selected="false">login</a></li>
                    <li class="nav-item"><a class="nav-link active" id="signup-tab" data-toggle="tab" href="/register"
                            role="tab" aria-selected="true">Signup</a></li>
                </ul>
            </div>
        </div>
        <div class="login-content">
            <div class="login-content-header"><img class="img-fluid" src="theme/assets/images/logo/vestra-logo.png"
                    alt="images"></div>
            <h3>please signup to your account.</h3>
            <form class="form2" method="POST" action="{{ route('register') }}">
                @csrf

                <div class="form-group">
                    <label class="col-form-label" for="inputEmail3">Full Name</label>
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>

                <div class="form-group">
                    <label class="col-form-label" for="inputEmail3">Email Address</label>
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror

                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputPassword3">Password</label><span> </span>
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
                <div class="form-group">
                    <div class="rememberchk">
                        <div class="form-check">
                            <input class="form-check-input" id="gridCheck1" type="checkbox">
                            <label class="form-check-label" for="gridCheck1">Remember Me.</label>
                            <h6>Forgot Password?</h6>
                        </div>
                    </div>
                </div>

                <div class="form-group mb-0">
                    <div class="buttons">
                        <button type="submit" class="btn button-effect btn-primary">Signup</a>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <div class="animation-block">
        <div class="bg_circle">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
        <div class="cross"></div>
        <div class="cross1"></div>
        <div class="cross2"></div>
        <div class="dot"></div>
        <div class="dot1"></div>
        <div class="top-circle"></div>
        <div class="center-circle"></div>
        <div class="bottom-circle1"></div>
        <div class="right-circle"></div>
        <div class="right-circle1"></div>
        <div class="quarterCircle"></div><img class="cloud-logo" src="theme/assets/images/login_signup/2.png"
            alt="login logo" /><img class="cloud-logo1" src="theme/assets/images/login_signup/2.png"
            alt="login logo" /><img class="cloud-logo2" src="theme/assets/images/login_signup/2.png"
            alt="login logo" /><img class="cloud-logo3" src="theme/assets/images/login_signup/2.png"
            alt="login logo" /><img class="cloud-logo4" src="theme/assets/images/login_signup/2.png"
            alt="login logo" /><img class="cloud-logo5" src="theme/assets/images/login_signup/2.png" alt="login logo" />
    </div>
</div>

@endsection
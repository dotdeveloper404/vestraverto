@extends('layouts.app')

@section('content')

<div class="login-page2 animat-rate">
    <div class="login-content-main">
        <div class="login-content2">
            <div class="theme-tab">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item"><a class="nav-link active">login</a></li>
                    <li class="nav-item"><a class="nav-link " href="/register">Signup</a></li>
                </ul>
            </div>
        </div>
        <div class="login-content">
            <div class="login-content-header"><img class="img-fluid" src="theme/assets/images/logo/vestra-logo.png"
                    alt="images"></div>
            <h3>login to your account.</h3>
            <form class="form2" method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                    <label class="col-form-label" for="inputEmail3">Email Address</label>
                    <input name="email" class="form-control" id="inputEmail3" type="email" placeholder="">
                </div>
                <div class="form-group">
                    <label class="col-form-label" for="inputPassword3">Password</label><span> </span>
                    <input name="password" class="form-control" id="inputPassword3" type="password"
                        placeholder="Password">
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
                        <button type="submit" class="btn button-effect btn-primary">Login</button>
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
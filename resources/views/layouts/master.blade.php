<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <link rel="icon" href="{{ asset('theme/assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('theme/assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,600&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/style.css') }}" media="screen" id="color">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/tour.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/skins/moono-lisa/editor.css?t=HBDD') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/scayt/dialogs/dialog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/tableselection/styles/tableselection.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/copyformatting/styles/copyformatting.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/frontend-custom.css') }}">
</head>

<body class="{{ (url()->current() == route('home')) ? 'chat-landing-page' : '' }}">
    <div class="{{ (url()->current() == route('home')) ? 'landing-page-header' : 'inner-page' }}">
        <header id="home">
            <div class="custom-container">
                <div class="row">
                    <div class="col-12">
                        <div class="landing-header">
                            <div class="main-menu">
                                <nav class="navbar navbar-expand-sm navbar-light">
                                	<a class="navbar-brand" href="{{ route('home') }}">
                                		<img class="img-fluid" src="{{ asset('theme/assets/images/logo/vv-logo.png') }}" alt="logo">
                                	</a>
                                    <button class="navbar-toggler d-xl-none" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="true" aria-label="Toggle navigation">
                                    	<span class="navbar-toggler-icon"></span>
                                    </button>
                                    <div class="collapse navbar-collapse" id="navbarNav">
                                        <ul class="navbar-nav">
                                            <li class="nav-item {{ (url()->current() == route('home')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('home') }}">Home</a></li>
                                            <li class="nav-item {{ (url()->current() == route('about_us')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('about_us') }}">About Us</a></li>
                                            <li class="nav-item {{ (url()->current() == route('faqs')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('faqs') }}">FAQs</a></li>
                                            <li class="nav-item {{ (url()->current() == route('contact_us')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('contact_us') }}">Contact Us</a></li>
                                            <li class="nav-item {{ (url()->current() == route('privacy_policy')) ? 'active' : '' }}"><a class="nav-link" href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        @yield('bar')
    </div>
    <ul class="page-decore">
        <li class="top">
        	<img class="img-fluid inner2" src="{{ asset('theme/assets/images/landing/footer/2.png') }}" alt="">
        </li>
        <li class="bottom">
        	<img class="img-fluid inner2" src="{{ asset('theme/assets/images/landing/footer/2.png') }}" alt="">
        </li>
    </ul>
    
    @yield('content')

    <footer>
        <div class="container footer-main">
            <div class="row footer-block">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-title footer-mobile-title">
                        <h3>About</h3>
                    </div>
                    <div class="about-payment footer-contant">
                        <div class="logo"><a href="javascript:;"><img src="{{ asset('theme/assets/images/logo/vv-logo.png') }}" alt=""></a></div>
                        <br>
                        <hr>
                        <ul class="social-group">
                            <li><a class="icon-btn btn-google button-effect btn-sm text-white" href="javascript:;"><i class="fa fa-facebook"></i></a></li>
                            <li><a class="icon-btn btn-twiter button-effect btn-sm text-white" href="javascript:;"><i class="fa fa-twitter"></i></a></li>
                            <li><a class="icon-btn btn-linkedin button-effect btn-sm text-white" href="javascript:;"><i class="fa fa-linkedin"></i></a></li>
                            <li><a class="icon-btn btn-instagram button-effect btn-sm text-white" href="javascript:;"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="links">
                        <div class="footer-title">
                            <h3>Useful Links</h3>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('about_us') }}">About Us</a></li>
                                <li><a href="javascript:;">Services</a></li>
                                <li><a href="javascript:;">Blog</a></li>
                                <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3">
                    <div class="links">
                        <div class="footer-title">
                            <h3>Chitchat Help</h3>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="{{ route('privacy_policy') }}">Privacy Policy</a></li>
                                <li><a href="{{ route('faqs') }}">FAQs</a></li>
                                <li><a href="javascript:;">Support</a></li>
                                <li><a href="{{ route('contact_us') }}">Contact Us</a></li>
                                <li><a href="javascript:;">Tearm</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-4">
                    <div class="links">
                        <div class="footer-title">
                            <h3>Download For</h3>
                        </div>
                        <div class="footer-contant">
                            <ul>
                                <li><a href="javascript:;">Windows</a></li>
                                <li><a href="javascript:;">Linux</a></li>
                                <li><a href="javascript:;">IOS</a></li>
                                <li><a href="javascript:;">Android</a></li>
                                <li><a href="javascript:;">Mac</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4">
                    <div class="downlaod">
                        <div>
                            <div class="footer-title">
                                <h3>Download Apps</h3>
                            </div>
                            <div class="footer-contant">
                                <div class="footer-btn">
                                    <a class="btn active text-white" href="javascript:;">
                                        <i class="fa fa-apple"></i>
                                        <div>
                                            <h6>Available on the</h6>
                                            <h4>App store</h4>
                                        </div>
                                    </a>
                                    <a class="btn" href="javascript:;">
                                        <i class="fa fa-play"></i>
                                        <div>
                                            <h6>Available on the</h6>
                                            <h4>Google play</h4>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-back-block">
            <img class="img-fluid inner1" src="{{ asset('theme/assets/images/landing/footer/2.png') }}" alt="">
            <img class="img-fluid inner2" src="{{ asset('theme/assets/images/landing/footer/2.png') }}" alt="">
        </div>
        <div class="container copyright-footer">
            <div class="row copyright">
                <div class="col-md-6 col-sm-12">
                    <p>© 2021 {{ config('app.name', 'Laravel') }}. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </footer>
    <!-- tap to top start //-->
    <div class="tap-top">
        <div><i class="fa fa-angle-double-up"></i></div>
    </div>
    <!-- tap to top end //-->
    <script src="{{ asset('theme/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('theme/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/tippy-bundle.iife.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme/assets/js/switchery.js') }}"></script>
    <script src="{{ asset('theme/assets/js/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('theme/assets/js/tour/intro.js') }}"></script>
    <script src="{{ asset('theme/assets/js/tour/intro-init.js') }}"></script>
    <script src="{{ asset('theme/assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('theme/assets/js/zoom-gallery.js') }}"></script>
    <script src="{{ asset('theme/assets/js/script.js') }}"></script>
    <script src="{{ asset('theme/assets/js/jquery.magnific-popup.js') }}"></script>
</body>

</html>
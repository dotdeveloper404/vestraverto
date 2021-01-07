@extends('layouts.master')

@section('content')
<section class="landing_page_slider">
    <div class="custom-container">
        <div class="row">
            <div class="col-12">
                <div class="landing_page_slider-main text-center">
                    <div class="landing_page_slider-contain">
                        <h1>Easy To Use Our Chat App</h1>
                        <h4><span>Desktop App</span>– Easy to use our chat app, Attractive and clean design, with many<br> Features:- Dark & light, Recent Chat And many more.......</h4>
                    </div>
                </div>
            </div>
            <div class="animated-img-1">
                <img class="img-fluid slicing-img-4" src="{{ asset('theme/assets/images/landing-page/slicing/vector.png') }}" alt="">
                <img class="img-fluid slicing-img-5" src="{{ asset('theme/assets/images/landing-page/slicing/vector1.png') }}" alt="">
                <img class="img-fluid slicing-img-6" src="{{ asset('theme/assets/images/landing-page/slicing/vector2.png') }}" alt="">
                <img class="img-fluid slicing-img-7" src="{{ asset('theme/assets/images/landing-page/slicing/vector2.png') }}" alt="">
            </div>
            <div class="animated-img-2">
                <div>
                    <img class="img-fluid slicing-img-1" src="{{ asset('theme/assets/images/landing-page/slicing/11.png') }}" alt="">
                    <img class="img-fluid slicing-img-2" src="{{ asset('theme/assets/images/landing-page/slicing/21.png') }}" alt="">
                    <img class="img-fluid slicing-img-3" src="{{ asset('theme/assets/images/landing-page/slicing/22.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
<section class="all_features section-py-space">
    <div class="custom-container">
        <div class="row">
            <div class="col-12">
                <div class="content-title">
                    <h2>Sit labore ad non.</h2>
                    <h1>Nulla ea ad ea voluptate.</h1>
                    <h5>Proident officia dolore non elit irure duis pariatur ut ad incididunt aliqua voluptate anim irure dolore ut duis commodo ea ut ut deserunt est dolor.</h5>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
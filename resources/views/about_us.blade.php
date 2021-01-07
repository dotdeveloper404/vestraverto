@extends('layouts.master')

@section('bar')
<section class="breadcrumb-main">
    <div class="custom-container">
        <h2>About Us</h2>
        <ul>
            <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li><a href="{{ route('about_us') }}" class="text-white">About Us</a></li>
        </ul>
    </div>
</section>
@endsection

@section('content')
<section class="counter-sec section-py-space counter-main about-page">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2 text-center">
                <div class="counter-title">
                    <h4 class="title-line">Vestra Verto</h4>
                </div>
                <p>What makes our live chat software outstanding? This is not only the rich set of features and stability, this is the team that works hard to make the product better, develop new features, showing at the same time how to provide outstanding customer service.</p>
                <p>Here at Vestra Verto we constantly cooperate with our customers who help us make our service better and more profitable for their business. Listening to our customers is the main key to our success.</p>
                <p>By providing live chat service on our own website we demonstrate our customers how the system works and our team shows how to provide outstanding customer support via live chat. In our blog we share our own experience, valuable customer service tips and tricks and teach our audience how to assist through live chat channel.</p>
                <p>Almost all modern customers expect to see a click to chat button on a website. By adding this tool you will not only improve your customer service level, but will also increase website credibility as well as sales. At Vestra Verto we will be glad to assist you and help your business grow.</p>
            </div>
        </div>
    </div>
</section>
<section class="counter-sec section-py-space counter-main">
    <div class="container">
        <div class="counter-title">
            <h4 class="title-line">Counters</h4>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="counter-slider owl-carousel owl-theme pt-0">
                    <div class="item">
                        <div class="counter-box-second">
                            <div class="counter-box">
                                <div><i class="counter-icon fa fa-user-o"></i>
                                    <h6 class="counter-no count">80</h6><span>Happy Clients</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="counter-box-second">
                            <div class="counter-box">
                                <div><i class="counter-icon fa fa-square-o"></i>
                                    <h6 class="counter-no count">120</h6><span>Project Completed</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="counter-box-second">
                            <div class="counter-box">
                                <div><i class="counter-icon fa fa-heart-o"></i>
                                    <h6 class="counter-no count">90</h6><span>Photo Capture</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="counter-box-second">
                            <div class="counter-box">
                                <div><i class="counter-icon fa fa-comments-o"></i>
                                    <h6 class="counter-no count">140</h6><span>Telephonic Talk </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
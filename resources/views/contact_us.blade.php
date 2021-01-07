@extends('layouts.master')

@section('bar')
<section class="breadcrumb-main">
    <div class="custom-container">
        <h2>Contact Us</h2>
        <ul>
            <li><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li><a href="{{ route('contact_us') }}" class="text-white">Contact Us</a></li>
        </ul>
    </div>
</section>
@endsection

@section('content')
<section class="counter-sec section-py-space">
    <div class="container">
        <div class="row">
            <div class="col-sm-8 offset-sm-2">
                <div class="counter-title text-center">
                    <h4 class="title-line">Contact Us</h4>
                </div>
                <div>
                    <form action="/" method="GET">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="email" name="email" id="email" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="subject">Subject</label>
                                    <input type="text" name="subject" id="subject" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="messsage">Messsage</label>
                                    <textarea name="messsage" id="messsage" rows="6" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary button-effect fonts font_label">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>                    
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
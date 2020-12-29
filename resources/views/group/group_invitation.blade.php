@extends('layouts.app')

@section('content')
<div class="login-page2 animat-rate">
    <div class="login-content-main">
        <div class="login-content2">
            <div class="theme-tab"></div>
        </div>
        <div class="login-content">
            <div class="login-content-header">
                <img class="img-fluid" src="{{ asset('theme/assets/images/logo/vestra-logo.png') }}">
            </div>
            <h3>Accept Invitation.</h3>
            <form class="form2" method="POST" action="{{ route('group.post_accept_invitation',$id) }}">
                @csrf
                <div class="form-group mb-0">
                    <div class="buttons">
                        <button type="submit" class="btn  btn-primary">Accept</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
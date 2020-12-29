<nav class="main-nav on custom-scroll">
    <div class="logo-warpper">
        <a href="{{ url('/') }}">
            <img src="{{ asset('theme/assets/images/favicon/favicon.png') }}">
        </a>
    </div>
    <div class="sidebar-main">
        <ul class="sidebar-top">
            <li>
                <a href="favourite" class="icon-btn btn-light button-effect" data-tippy-content="Favourite">
                    <i class="fa fa-star"></i>
                </a>
            </li>
            <li>
                <a href="document" class="icon-btn btn-light button-effect" data-tippy-content="Document">
                    <i class="fa fa-file-text"></i>
                </a>
            </li>
            <li>
                <div class="dot-btn dot-danger grow">
                    <a href="notification" class="icon-btn btn-light button-effect" data-tippy-content="Notification">
                        <i class="fa fa-bell"></i>
                    </a>
                </div>
            </li>
            <li>
                <a href="settings" class="icon-btn btn-light button-effect" data-tippy-content="Setting">
                    <i class="fa fa-cog"></i>
                </a>
            </li>
        </ul>
        <ul class="sidebar-bottom">
            <li>
                <a href="javascript:;" class="icon-btn btn-light button-effect mode" data-tippy-content="Theme Mode">
                    <i class="fa fa-moon-o"></i>
                </a>
            </li>
            <li>
                <a href="{{ route('logout') }}" class="icon-btn btn-light" data-tippy-content="SignOut">
                    <i class="fa fa-power-off"></i>
                </a>
            </li>
        </ul>
    </div>
</nav>
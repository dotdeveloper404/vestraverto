<aside class="chitchat-left-sidebar left-disp">
    <div class="recent-default dynemic-sidebar active">
        <div class="recent">
            <div class="theme-title">
                <div class="media">
                    <div>
                        <h2>Recent</h2>
                        <h4>Chat from your friends &#128536;</h4>
                    </div>
                    <div class="media-body">
                        <a href="javascript:;" class="icon-btn btn-outline-light button-effect pull-right mobile-back">
                            <i class="ti-angle-right"></i>
                        </a>
                        <a href="javascript:;" class="icon-btn btn-outline-light button-effect pull-right mainnav">
                            <i class="ti-layout-grid2"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="recent-slider recent-chat owl-carousel owl-theme">
                <div class="item">
                    <div class="recent-box">
                        <div class="dot-btn dot-danger grow"></div>
                        <div class="recent-profile">
                            <img class="bg-img" src="/theme/assets/images/avtar/1.jpg">
                            <h6>John deo</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recent-box">
                        <div class="dot-btn dot-success grow"></div>
                        <div class="recent-profile online">
                            <img class="bg-img" src="/theme/assets/images/avtar/big/audiocall.jpg">
                            <h6>John</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recent-box">
                        <div class="dot-btn dot-success grow"></div>
                        <div class="recent-profile">
                            <img class="bg-img" src="/theme/assets/images/avtar/2.jpg">
                            <h6>Jpny</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="chat custom-scroll">
            <div class="theme-title">
                <div class="media">
                    <div>
                        <h2>Groups Chat</h2>
                        <h4>Search Group</h4>
                    </div>
                    <div class="media-body text-right">
                        <a href="javascript:;" class="icon-btn btn-outline-light btn-sm search contact-search"> 
                            <i data-feather="search"></i>
                        </a>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search..">
                                <div class="icon-close close-search"></div>
                            </div>
                        </form>
                        <a class="icon-btn btn-primary btn-fix chat-cont-toggle outside" data-toggle="modal" data-target="#groupModalCenter">
                            <i data-feather="plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="theme-tab tab-sm chat-tabs">
                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                        <div class="theme-tab">
                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="group" role="tabpanel" aria-labelledby="group-tab">
                                    <ul class="group-main">
                                        @foreach($groups as $group)
                                            <li {{$group->uuid == $uuid ? 'class=active' : ''}} data-to="group_chat">
                                                <a href="{{route('messenger.group',$group->uuid)}}">
                                                    <div class="group-box">
                                                        <div class="profile">
                                                            <group-avatar :rounded=false :size=60 name="{{$group->name}}"></group-avatar>
                                                        </div>
                                                        <div class="details">
                                                            <h5>{{$group->name}}</h5>
                                                            <h6>{{ \Illuminate\Support\Str::limit($group->latest_message['message'],40) }}&nbsp;</h6>
                                                        </div>
                                                        <div class="date-status">
                                                            <ul class="grop-icon">
                                                                @foreach($group->users as $user)
                                                                    @if($loop->index < 3) 
                                                                        <li>
                                                                            <span class="group-tp" data-tippy-content="{{ $user->name }}">
                                                                                <group-avatar :rounded=true :size=23 class="user-avatar" name="{{ $user->name }}"></group-avatar>
                                                                            </span>
                                                                        </li>
                                                                    @endif
                                                                @endforeach
                                                                <li>{{count($group->users) - 3 > 3 ?   count($group->users) - 3 .'more' : ''  }}</li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="document-tab dynemic-sidebar" id="document">
        <div class="theme-title">
            <div class="media">
                <div>
                    <h2>Document</h2>
                    <h4>List of document</h4>
                </div>
                <div class="media-body text-right">
                    <a href="javascript:;" class="icon-btn btn-outline-light btn-sm m-r-15 search">
                        <i data-feather="search"></i>
                    </a>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Search..">
                            <div class="icon-close close-search"></div>
                        </div>
                    </form>
                    <a href="javascript:;" class="icon-btn btn-outline-light btn-sm close-panel"><i data-feather="x"></i></a>
                </div>
            </div>
        </div>
        <ul class="chat-main">
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile">
                            <a href="javascript:;" class="icon-btn btn-outline-success btn-xl pull-right rouded15">
                                <i class="fa fa-file-video-o"></i>
                            </a>
                        </div>
                        <div class="details">
                            <h5>chapter1.MP4</h5>
                            <h6>3, Octomber 2019</h6>
                        </div>
                        <div class="media-body">
                            <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right" target="_blank">
                                <i data-feather="download"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="notification-tab dynemic-sidebar custom-scroll" id="notification">
        <div class="theme-title">
            <div class="media">
                <div>
                    <h2>Notification</h2>
                    <h4>List of notification</h4>
                </div>
                <div class="media-body text-right">
                    <a href="javascript:;" class="icon-btn btn-outline-light btn-sm close-panel">
                        <i data-feather="x"></i>
                    </a>
                </div>
            </div>
        </div>
        <ul class="chat-main">
            <li>
                <div class="chat-box notification">
                    <div class="profile offline">
                        <img class="bg-img" src="{{ asset('theme/assets/images/contact/1.jpg') }}">
                    </div>
                    <div class="details">
                        <span>Josephin water</span>
                        <h5>Upload New Photos</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="date-status">
                        <h6>Now</h6>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="settings-tab dynemic-sidebar custom-scroll" id="settings">
        <div class="theme-title">
            <div class="media">
                <div>
                    <h2>Settings</h2>
                    <h4>Change your app setting.</h4>
                </div>
                <div class="media-body text-right"> 
                    <a href="javascript:;" class="icon-btn btn-outline-light btn-sm close-panel">
                        <i data-feather="x"></i>
                    </a>
                </div>
            </div>
            <div class="profile-box">
                <div class="media">
                    <div class="profile">
                        <img class="bg-img" src="{{ asset('theme/assets/images/contact/2.jpg') }}">
                    </div>
                    <div class="details">
                        <h5>Josephin water</h5>
                        <h6>Alabma , USA</h6>
                    </div>
                    <div class="details edit">
                        <form class="form-radious form-sm">
                            <div class="form-group mb-2">
                                <input type="text" name="username" id="username" class="form-control" value="Josephin water" />
                            </div>
                            <div class="form-group mb-0">
                                <input type="text" name="address" id="address" class="form-control" value="Alabma , USA" />
                            </div>
                        </form>
                    </div>
                    <div class="media-body">
                        <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right edit-btn">
                            <i data-feather="edit"> </i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Account</h3>
                    </div>
                    <div class="media-right">
                        <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right previous">
                            <i data-feather="chevron-left"> </i>
                        </a>
                    </div>
                </div>
                <div class="theme-according" id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingTwo" role="heading" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <a href="javascript:;">Security<i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="collapse show" id="collapseTwo" aria-labelledby="headingTwo" data-parent="#accordion">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Show Security notification</h5>
                                    </div>
                                    <div class="media-right">
                                        <input type="checkbox" class="js-switch">
                                    </div>
                                </div>
                                <p><b>Note: </b>turn on this setting to recive notification when a contact's security code has been changes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne" role="heading" data-toggle="collapse" data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <a href="javascript:;">Privacy<i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="privacy">
                                    <li>
                                        <h5>Last seen</h5>
                                        <input type="checkbox" class="js-switch">
                                        <p><b>Note: </b>turn on this setting to whether your contact can see last seen or not.</p>
                                    </li>
                                    <li>
                                        <h5>Profile Photo</h5>
                                        <input type="checkbox" class="js-switch">
                                        <p><b>Note: </b>turn on this setting to whether your contact can see your profile or not.</p>
                                    </li>
                                    <li>
                                        <h5>About</h5>
                                        <input type="checkbox" class="js-switch">
                                        <p><b>Note: </b>turn on this setting to whether your contact can see about status or not.</p>
                                    </li>
                                    <li>
                                        <h5>Status</h5>
                                        <input type="checkbox" class="js-switch">
                                        <p><b>Note: </b>turn on this setting to whether your contact can see your status or not.</p>
                                    </li>
                                    <li>
                                        <h5>Read receipts</h5>
                                        <input type="checkbox" class="js-switch">
                                        <p><b>Note: </b>If turn off this option you won't be able to see read recipts from contact. read receipts are always sent for group chats.</p>
                                    </li>
                                    <li>
                                        <h5>Groups</h5>
                                        <input type="checkbox" class="js-switch" checked>
                                        <p><b>Note: </b>turn on this setting to whether your contact can add in groups or not.</p>
                                    </li>
                                    <li>
                                        <h5>Screen Lock(Require Touch ID)</h5>
                                        <input type="checkbox" class="js-switch">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree" role="heading" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <a href="javascript:;">Two Step verification<i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree" data-parent="#accordion">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Enable</h5>
                                    </div>
                                    <div class="media-right">
                                        <input type="checkbox" class="js-switch">
                                    </div>
                                </div>
                                <p><b>Note: </b>For added security, enable two-step verifiation, which will require a PIN when registering your phone number with Chitchat again.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour" role="heading" data-toggle="collapse" data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <a href="javascript:;">Change Number<i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body change-number">
                                <h5>Your old country code & phone number</h5>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text form-control m-0">+</span>
                                    </div>
                                    <input class="form-control country-code" type="number" placeholder="01" />
                                    <input class="form-control" type="number" placeholder="1234567895" />
                                </div>
                                <h5>Your new country code & phone number</h5>
                                <div class="input-group">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text form-control m-0">+</span>
                                    </div>
                                    <input class="form-control country-code" type="number" placeholder="01" />
                                    <input class="form-control" type="number" placeholder="" />
                                </div>
                                <div class="text-right">
                                    <a href="javascript:;" class="btn btn-outline-primary button-effect btn-sm">confirm</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive" role="heading" data-toggle="collapse" data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <a href="javascript:;">Request account info<i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body">
                                <a class="p-0 req-info" id="demo" href="javascript:;" onclick="document.getElementById(&quot;demo&quot;).innerHTML = &quot;Request sent&quot;">Request Info </a>
                                <p><b>Note: </b>Create a report of your account information and settings, which you can access ot port to another app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix" role="heading" data-toggle="collapse" data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <a href="javascript:;">Delete My account<i class="fa fa-angle-down"></i></a>
                        </div>
                        <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body">
                                <a class="p-0 req-info font-danger" href="javascript:;">Delete Account</a>
                                <p><b>Note: </b>Deleting your account will delete your account info, profile photo, all groups & chat history.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="media">
                <div class="media-body">
                    <h3>Account</h3>
                    <h4>Update Your Account Details</h4>
                </div>
                <div class="media-right">
                    <a class="icon-btn btn-outline-light btn-sm pull-right next" href="javascript:;">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Chat</h3>
                    </div>
                    <div class="media-right">
                        <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right previous">
                            <i data-feather="chevron-left"></i>
                        </a>
                    </div>
                </div>
                <ul class="help">
                    <li>
                        <h5>Chat Backup</h5>
                        <ul class="switch-list">
                            <li>
                                <input type="checkbox" class="js-switch" checked>
                                <h5>Auto Backup</h5>
                            </li>
                            <li>
                                <input type="checkbox" class="js-switch">
                                <h5>Include document</h5>
                            </li>
                            <li>
                                <input type="checkbox" class="js-switch">
                                <h5>Include Videos</h5>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h5>Chat wallpaper</h5>
                        <ul class="wallpaper">
                            <li>
                                <img class="bg-img" src="/theme/assets/images/wallpaper/2.jpg">
                            </li>
                            <li>
                                <img class="bg-img" src="/theme/assets/images/wallpaper/1.jpg">
                            </li>
                            <li>
                                <img class="bg-img" src="/theme/assets/images/wallpaper/3.jpg">
                            </li>
                            <li>
                                <img class="bg-img" src="/theme/assets/images/wallpaper/4.jpg">
                            </li>
                            <li>
                                <img class="bg-img" src="/theme/assets/images/wallpaper/5.jpg">
                            </li>
                            <li>
                                <img class="bg-img" src="/theme/assets/images/wallpaper/6.jpg">
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h5><a href="javascript:;">Archive all chat</a></h5>
                    </li>
                    <li>
                        <h5><a href="javascript:;"> Clear all chats</a></h5>
                    </li>
                    <li>
                        <h5><a href="javascript:;" class="font-danger">Delete all chats</a></h5>
                    </li>
                </ul>
            </div>
            <div class="media">
                <div class="media-body">
                    <h3>Chat</h3>
                    <h4>Control Your Chat Backup</h4>
                </div>
                <div class="media-right">
                    <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right next">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Integratin</h3>
                    </div>
                    <div class="media-right">
                        <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right previous">
                            <i data-feather="chevron-left"></i>
                        </a>
                    </div>
                </div>
                <ul class="integratin">
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="javascript:;" class="fb" target="_blank">
                                    <i class="fa fa-facebook"></i>
                                    <h5>Facebook</h5>
                                </a>
                            </div>
                            <div class="media-right">
                                <div class="profile">
                                    <img class="bg-img" src="{{ asset('theme/assets/images/contact/1.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="javascript:;" class="insta" target="_blank">
                                    <i class="fa fa-instagram"></i>
                                    <h5>Instagram</h5>
                                </a>
                            </div>
                            <div class="media-right">
                                <div class="profile">
                                    <img class="bg-img" src="{{ asset('theme/assets/images/contact/2.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="javascript:;" class="twi" target="_blank">
                                    <i class="fa fa-twitter"></i>
                                    <h5>Twitter</h5>
                                </a>
                            </div>
                            <div class="media-right">
                                <div class="profile">
                                    <img class="bg-img" src="{{ asset('theme/assets/images/contact/3.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="javascript:;" class="ggl" target="_blank">
                                    <i class="fa fa-google"></i>
                                    <h5>Google</h5>
                                </a>
                            </div>
                            <div class="media-right">
                                <div class="profile">
                                    <img class="bg-img" src="{{ asset('theme/assets/images/contact/2.jpg') }}">
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left">
                                <a href="javascript:;" class="slc">
                                    <i class="fa fa-slack"></i>
                                    <h5>Slack</h5>
                                </a>
                            </div>
                            <div class="media-right">
                                <div class="profile">
                                    <a href="javascript:;" target="_blank">
                                        <i data-feather="plus-circle"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="media">
                <div class="media-body">
                    <h3>Integratin</h3>
                    <h4>Sync Your Other Social Account</h4>
                </div>
                <div class="media-right">
                    <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right next">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Help</h3>
                    </div>
                    <div class="media-right">
                        <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right previous">
                            <i data-feather="chevron-left"></i>
                        </a>
                    </div>
                </div>
                <ul class="help">
                    <li>
                        <h5><a href="javascript:;">FAQ</a></h5>
                    </li>
                    <li>
                        <h5><a href="javascript:;"> Contact Us</a></h5>
                    </li>
                    <li>
                        <h5><a href="javascript:;">Terms and Privacy Policy</a></h5>
                    </li>
                    <li>
                        <h5><a href="javascript:;">Licenses</a></h5>
                    </li>
                    <li>
                        <h5><a href="javascript:;">2019 - 20 Powered by Pixelstrap</a></h5>
                    </li>
                </ul>
            </div>
            <div class="media">
                <div class="media-body">
                    <h3>Help</h3>
                    <h4>You are Confusion, Tell me</h4>
                </div>
                <div class="media-right">
                    <a href="javascript:;" class="icon-btn btn-outline-light btn-sm pull-right next">
                        <i data-feather="chevron-right"></i>
                    </a>
                </div>
            </div>
        </div>
    </div>
</aside>
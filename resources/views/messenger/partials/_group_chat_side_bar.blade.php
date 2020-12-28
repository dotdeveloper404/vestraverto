<aside class="chitchat-left-sidebar left-disp">
    <div class="recent-default dynemic-sidebar active">
        <div class="recent">
            <div class="theme-title">
                <div class="media">
                    <div>
                        <h2>Recent</h2>
                        <h4>Chat from your friends &#128536;</h4>
                    </div>
                    <div class="media-body"><a class="icon-btn btn-outline-light button-effect pull-right mobile-back"
                            href="#"><i class="ti-angle-right"></i></a><a
                            class="icon-btn btn-outline-light button-effect pull-right mainnav" href="#"><i
                                class="ti-layout-grid2"></i></a></div>
                </div>
            </div>
            <div class="recent-slider recent-chat owl-carousel owl-theme">
                <div class="item">
                    <div class="recent-box">
                        <div class="dot-btn dot-danger grow"></div>
                        <div class="recent-profile"><img class="bg-img" src="/theme/assets/images/avtar/1.jpg"
                                alt="Avatar" />
                            <h6> John deo</h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recent-box">
                        <div class="dot-btn dot-success grow"></div>
                        <div class="recent-profile online"><img class="bg-img"
                                src="/theme/assets/images/avtar/big/audiocall.jpg" alt="Avatar" />
                            <h6> John </h6>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="recent-box">
                        <div class="dot-btn dot-warning grow"></div>
                        <div class="recent-profile"><img class="bg-img" src="/theme/assets/images/avtar/2.jpg"
                                alt="Avatar" />
                            <h6> Jpny</h6>
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
                    <div class="media-body text-right"> <a
                            class="icon-btn btn-outline-light btn-sm search contact-search" href="#"> <i
                                data-feather="search"></i></a>
                        <form class="form-inline search-form">
                            <div class="form-group">
                                <input class="form-control-plaintext" type="search" placeholder="Search.." />
                                <div class="icon-close close-search"> </div>
                            </div>
                        </form>
                        <a class="icon-btn btn-primary btn-fix chat-cont-toggle outside" data-toggle="modal"
                            data-target="#groupModalCenter"><i data-feather="plus"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="theme-tab tab-sm chat-tabs">

                <div class="tab-content" id="myTabContent">
                    <div class="tab-pane fade show active" id="chat" role="tabpanel" aria-labelledby="chat-tab">
                        <div class="theme-tab">

                            <div class="tab-content" id="myTabContent1">
                                <div class="tab-pane fade show active" id="group" role="tabpanel"
                                    aria-labelledby="group-tab">
                                    <ul class="group-main">
                                        @foreach($groups as $group)
                                        <a href="{{route('messenger.group',$group->uuid)}}">
                                            <li {{$group->uuid == $uuid ? 'class=active' : ''}} data-to="group_chat">
                                                <div class="group-box">
                                                    <div class="profile">
                                                        <group-avatar :rounded=false :size=60 name="{{$group->name}}" />
                                                    </div>

                                                    <div class="details">
                                                        <h5>{{$group->name}}</h5>
                                                        <h6>{{ \Illuminate\Support\Str::limit($group->latest_message['message'],40) }}
                                                            &nbsp;
                                                        </h6>
                                                    </div>

                                                    <div class="date-status">
                                                        <ul class="grop-icon">
                                                            @foreach($group->users as $user)
                                                            @if($loop->index < 3) <li>

                                                                <a class="group-tp" href="#"
                                                                    data-tippy-content="{{$user->name}}">

                                                                    <group-avatar :rounded=true :size=23
                                                                        class="user-avatar" name="{{$user->name}}" />

                                                                </a>
                                            </li>
                                        </a>

                                        @endif
                                        @endforeach

                                        <li>
                                            {{count($group->users) - 3 > 3 ?   count($group->users) - 3 .'more' : ''  }}
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            </li>
                            @endforeach


                            <li style="display:none" data-to="group_blank">
                                <div class="group-box">
                                    <div class="profile"><img class="bg-img" src="/theme/assets/images/avtar/family.jpg"
                                            alt="Avatar" />
                                    </div>
                                    <div class="details">
                                        <h5>Family Ties</h5>
                                        <h6>Lorem Ipsum is simply dummy text the printing and
                                            typesetting industry.</h6>
                                    </div>
                                    <div class="date-status">
                                        <ul class="grop-icon">
                                            <li><a class="group-tp" href="#" data-tippy-content="Josephin">
                                                    <img src="/theme/assets/images/contact/1.jpg"
                                                        alt="group-icon-img" /></a></li>
                                            <li><a class="group-tp" href="#" data-tippy-content="Jony ">
                                                    <img src="/theme/assets/images/contact/2.jpg"
                                                        alt="group-icon-img" /></a></li>
                                            <li><a class="group-tp" href="#" data-tippy-content="Pabelo">
                                                    <img src="/theme/assets/images/contact/3.jpg"
                                                        alt="group-icon-img" /></a></li>
                                            <li>+ 12</li>
                                        </ul>
                                        <div class="badge badge-primary"></div>
                                    </div>
                                </div>
                            </li>
                            <li style="display:none" data-to="group_blank">
                                <div class="group-box">
                                    <div class="profile bg-danger"><span>HT</span></div>
                                    <div class="details">
                                        <h5>Hungry for Trouble</h5>
                                        <h6>Lorem Ipsum is simply dummy text the printing and
                                            typesetting industry.</h6>
                                    </div>
                                </div>
                            </li>
                            <li style="display:none" data-to="group_blank">
                                <div class="group-box">
                                    <div class="profile"><img class="bg-img" src="/theme/assets/images/avtar/girls.jpg"
                                            alt="Avatar" />
                                    </div>
                                    <div class="details">
                                        <h5>Staunch Ladies</h5>
                                        <h6>Lorem Ipsum is simply dummy text the printing and
                                            typesetting industry.</h6>
                                    </div>
                                </div>
                            </li>
                            <li style="display:none" data-to="group_blank">
                                <div class="group-box">
                                    <div class="profile bg-success"><span>CE</span></div>
                                    <div class="details">
                                        <h5>Crazy Engineers</h5>
                                        <h6>Lorem Ipsum is simply dummy text the printing and
                                            typesetting industry.</h6>
                                    </div>
                                    <div class="date-status"></div>
                                </div>
                            </li>


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="call" role="tabpanel" aria-labelledby="call-tab">
                <div class="theme-tab tab-icon">
                    <ul class="nav nav-tabs" id="contactTab" role="tablist">
                        <li class="nav-item"><a class="nav-link active" id="con1-tab" data-toggle="tab" href="#con1"
                                role="tab" aria-controls="con1" aria-selected="true">All</a></li>
                        <li class="nav-item"><a class="nav-link" id="con3-tab" data-toggle="tab" href="#con3" role="tab"
                                aria-controls="con3" aria-selected="false"> <i data-feather="phone-incoming"></i></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="con4-tab" data-toggle="tab" href="#con4" role="tab"
                                aria-controls="con4" aria-selected="false"> <i data-feather="phone-outgoing"></i></a>
                        </li>
                        <li class="nav-item"><a class="nav-link" id="con2-tab" data-toggle="tab" href="#con2" role="tab"
                                aria-controls="con2" aria-selected="false"> <i data-feather="phone-missed"></i></a></li>
                    </ul>
                    <div class="tab-content" id="contactTabContent">
                        <div class="tab-pane fade show active" id="con1" role="tabpanel" aria-labelledby="con1-tab">
                            <ul class="call-log-main">
                                <li class="active">
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-left"></i>3:30 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="phone"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm
                                            </h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-danger button-effect btn-sm">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="phone"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="con2" role="tabpanel" aria-labelledby="con2-tab">
                            <ul class="call-log-main">
                                <li class="active">
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:30 pm
                                            </h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-danger button-effect btn-sm">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:10 pm
                                            </h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-danger button-effect btn-sm">
                                                <i data-feather="video"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm
                                            </h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-danger button-effect btn-sm">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm
                                            </h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-danger button-effect btn-sm">
                                                <i data-feather="video"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm
                                            </h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-danger button-effect btn-sm">
                                                <i data-feather="phone"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i class="missed" data-feather="corner-left-down"></i>3:00 pm
                                            </h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-danger button-effect btn-sm">
                                                <i data-feather="video"></i>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="con3" role="tabpanel" aria-labelledby="con3-tab">
                            <ul class="call-log-main">
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:10 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="phone"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="phone"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-down-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-pane fade" id="con4" role="tabpanel" aria-labelledby="con4-tab">
                            <ul class="call-log-main">
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-up-right"></i>3:10 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="phone"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile offline"><img class="bg-img"
                                                src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="phone"></i></div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="call-box">
                                        <div class="profile online"><img class="bg-img"
                                                src="/theme/assets/images/contact/1.jpg" alt="Avatar" />
                                        </div>
                                        <div class="details">
                                            <h5>Jony Lynetin</h5>
                                            <h6> <i data-feather="arrow-up-right"></i>3:00 pm</h6>
                                        </div>
                                        <div class="call-status">
                                            <div class="icon-btn btn-outline-success button-effect btn-sm">
                                                <i data-feather="video"></i></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                <ul class="contact-log-main">
                    <li>
                        <div class="contact-box">
                            <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                                    alt="Avatar" />
                            </div>
                            <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6>+21 3523 25544 </h6>
                            </div>
                            <div class="contact-action">
                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i
                                        data-feather="phone"></i>
                                </div>
                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i
                                        data-feather="video"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="active">
                        <div class="contact-box">
                            <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                                    alt="Avatar" />
                            </div>
                            <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6>+54 541447 255 </h6>
                            </div>
                            <div class="contact-action">
                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i
                                        data-feather="phone"></i>
                                </div>
                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i
                                        data-feather="video"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-box">
                            <div class="profile busy"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                                    alt="Avatar" />
                            </div>
                            <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6>+58 2564 02554</h6>
                            </div>
                            <div class="contact-action">
                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i
                                        data-feather="phone"></i>
                                </div>
                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i
                                        data-feather="video"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-box">
                            <div class="profile unreachable"><img class="bg-img"
                                    src="/theme/assets/images/contact/4.jpg" alt="Avatar" /></div>
                            <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6>+44 55124 2524</h6>
                            </div>
                            <div class="contact-action">
                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i
                                        data-feather="phone"></i>
                                </div>
                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i
                                        data-feather="video"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="contact-box">
                            <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/4.jpg"
                                    alt="Avatar" />
                            </div>
                            <div class="details">
                                <h5>Jony Lynetin</h5>
                                <h6>+54 541447 255 </h6>
                            </div>
                            <div class="contact-action">
                                <div class="icon-btn btn-outline-primary btn-sm button-effect"><i
                                        data-feather="phone"></i>
                                </div>
                                <div class="icon-btn btn-outline-success btn-sm button-effect"><i
                                        data-feather="video"></i>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    </div>
    </div>
    <div class="fevorite-tab dynemic-sidebar" id="favourite">
        <div class="theme-title">
            <div class="media">
                <div>
                    <h2>Favourite</h2>
                    <h4>Last Recent</h4>
                </div>
                <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#">
                        <i data-feather="search"></i></a>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Search.." />
                            <div class="icon-close close-search"></div>
                        </div>
                    </form><a class="icon-btn btn-outline-light btn-sm m-r-15" href="#" data-toggle="modal"
                        data-target="#addcallmodal"><i data-feather="plus"> </i></a><a
                        class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a>
                </div>
            </div>
        </div>
        <ul class="chat-main">
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                                alt="Avatar" /></div>
                        <div class="details">
                            <h5>Josephin water</h5>
                            <h6>Alabma , USA</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite"
                                href="#"> <i data-feather="star"> </i></a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                                alt="Avatar" /></div>
                        <div class="details">
                            <h5>Jony Lynetin</h5>
                            <h6>Los Angeles, California</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite"
                                href="#"> <i data-feather="star"> </i></a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile busy"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                                alt="Avatar" /></div>
                        <div class="details">
                            <h5>Sufiya Elija</h5>
                            <h6>Glasgow , Scotland</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite"
                                href="#"> <i data-feather="star"> </i></a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile unreachable"><img class="bg-img" src="/theme/assets/images/contact/4.jpg"
                                alt="Avatar" />
                        </div>
                        <div class="details">
                            <h5>Pabelo Mukrani</h5>
                            <h6>Leicester , England</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite"
                                href="#"> <i data-feather="star"> </i></a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                                alt="Avatar" /></div>
                        <div class="details">
                            <h5>Josephin water</h5>
                            <h6>Alabma , USA</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite"
                                href="#"> <i data-feather="star"> </i></a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                                alt="Avatar" /></div>
                        <div class="details">
                            <h5>Josephin water</h5>
                            <h6>Alabma , USA</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-primary btn-sm pull-right favourite"
                                href="#"> <i data-feather="star"> </i></a></div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="document-tab dynemic-sidebar" id="document">
        <div class="theme-title">
            <div class="media">
                <div>
                    <h2>Document</h2>
                    <h4>List of document</h4>
                </div>
                <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#">
                        <i data-feather="search"></i></a>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Search.." />
                            <div class="icon-close close-search"> </div>
                        </div>
                    </form><a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i
                            data-feather="x"></i></a>
                </div>
            </div>
        </div>
        <ul class="chat-main">
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile"><a class="icon-btn btn-outline-danger btn-xl pull-right rouded15"
                                href="#"><i class="fa fa-file-code-o"></i></a></div>
                        <div class="details">
                            <h5>messenger.html</h5>
                            <h6>2, octomber 2019</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right"
                                href="assets/doc/messenger.html" target="_blank"><i data-feather="download"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile"><a class="icon-btn btn-outline-success btn-xl pull-right rouded15"
                                href="#"><i class="fa fa-file-video-o"></i></a></div>
                        <div class="details">
                            <h5>chapter1.MP4</h5>
                            <h6>3, Octomber 2019</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right"
                                href="assets/doc/chapter1.MP4" target="_blank"> <i data-feather="download"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile"><a class="icon-btn btn-outline-primary btn-xl pull-right rouded15"
                                href="#"><i class="fa fa-file-word-o"></i></a></div>
                        <div class="details">
                            <h5>salary.xlsx</h5>
                            <h6>5, Octomber 2019</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right"
                                href="assets/doc/salary.xlsx" target="_blank"> <i data-feather="download"></i></a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile"><a class="icon-btn btn-outline-warning btn-xl pull-right rouded15"
                                href="#"><i class="fa fa-file-pdf-o"></i></a></div>
                        <div class="details">
                            <h5>document.pdf</h5>
                            <h6>7, Octomber 2019</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right"
                                href="assets/doc/document.pdf" target="_blank"> <i data-feather="download"></i></a>
                        </div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile"><a class="icon-btn btn-outline-danger btn-xl pull-right rouded15"
                                href="#"><i class="fa fa-file-text-o"></i></a></div>
                        <div class="details">
                            <h5>details.txt</h5>
                            <h6>20, Octomber 2019</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right"
                                href="assets/doc/details.txt" target="_blank"> <i data-feather="download"></i></a></div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="media">
                        <div class="profile"><a class="icon-btn btn-outline-success btn-xl pull-right rouded15"
                                href="#"><i class="fa fa-file-code-o"></i></a></div>
                        <div class="details">
                            <h5>messenger.html</h5>
                            <h6>2, octomber 2019</h6>
                        </div>
                        <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right"
                                href="assets/doc/messenger.html" target="_blank"><i data-feather="download"></i></a>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="contact-list-tab dynemic-sidebar custom-scroll" id="contact-list">
        <div class="theme-title">
            <div class="media">
                <div>
                    <h2>Contact</h2>
                    <h4>Start talking now</h4>
                </div>
                <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm m-r-15 search" href="#">
                        <i data-feather="search"></i></a>
                    <form class="form-inline search-form">
                        <div class="form-group">
                            <input class="form-control-plaintext" type="search" placeholder="Search.." />
                            <div class="icon-close close-search"> </div>
                        </div>
                    </form><a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i
                            data-feather="x"></i></a>
                </div>
            </div>
        </div>
        <ul class="chat-main">
            <li>
                <div class="chat-box">
                    <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Josephin water</h5>
                        <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                    </div>
                    <div class="date-status">
                        <h6>22/10/19</h6>
                        <h6 class="font-success status"> Seen</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Jony Lynetin</h5>
                        <h6>Hello</h6>
                    </div>
                    <div class="date-status">
                        <h6>30/11/19</h6>
                        <div class="badge badge-primary sm">8</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile unreachable"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                            alt="Avatar" />
                    </div>
                    <div class="details">
                        <h5>Sufiya Elija</h5>
                        <h6>I need job, please help me.</h6>
                    </div>
                    <div class="date-status">
                        <h6>15/06/19</h6>
                        <h6 class="font-dark status"> Sending</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile busy"><img class="bg-img" src="/theme/assets/images/contact/4.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Pabelo Mukrani</h5>
                        <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                    </div>
                    <div class="date-status">
                        <h6>04/06/19</h6>
                        <h6 class="font-danger status"> Failed</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Josephin water</h5>
                        <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                    </div>
                    <div class="date-status">
                        <h6>22/10/19</h6>
                        <h6 class="font-success status"> Seen</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Jony Lynetin</h5>
                        <h6>Hello</h6>
                    </div>
                    <div class="date-status">
                        <h6>30/11/19</h6>
                        <div class="badge badge-primary sm">8</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile unreachable"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                            alt="Avatar" />
                    </div>
                    <div class="details">
                        <h5>Sufiya Elija</h5>
                        <h6>I need job, please help me.</h6>
                    </div>
                    <div class="date-status">
                        <h6>15/06/19</h6>
                        <h6 class="font-dark status"> Sending</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Jony Lynetin</h5>
                        <h6>Hello</h6>
                    </div>
                    <div class="date-status">
                        <h6>30/11/19</h6>
                        <div class="badge badge-primary sm">8</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Josephin water</h5>
                        <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                    </div>
                    <div class="date-status">
                        <h6>22/10/19</h6>
                        <h6 class="font-success status"> Seen</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Jony Lynetin</h5>
                        <h6>Hello</h6>
                    </div>
                    <div class="date-status">
                        <h6>30/11/19</h6>
                        <div class="badge badge-primary sm">8</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile unreachable"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                            alt="Avatar" />
                    </div>
                    <div class="details">
                        <h5>Sufiya Elija</h5>
                        <h6>I need job, please help me.</h6>
                    </div>
                    <div class="date-status">
                        <h6>15/06/19</h6>
                        <h6 class="font-dark status"> Sending</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile busy"><img class="bg-img" src="/theme/assets/images/contact/4.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Pabelo Mukrani</h5>
                        <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                    </div>
                    <div class="date-status">
                        <h6>04/06/19</h6>
                        <h6 class="font-danger status"> Failed</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Josephin water</h5>
                        <h6>Hi, i am josephin. How are you.. ! There are many variations of passages.</h6>
                    </div>
                    <div class="date-status">
                        <h6>22/10/19</h6>
                        <h6 class="font-success status"> Seen</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Jony Lynetin</h5>
                        <h6>Hello</h6>
                    </div>
                    <div class="date-status">
                        <h6>30/11/19</h6>
                        <div class="badge badge-primary sm">8</div>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile unreachable"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                            alt="Avatar" />
                    </div>
                    <div class="details">
                        <h5>Sufiya Elija</h5>
                        <h6>I need job, please help me.</h6>
                    </div>
                    <div class="date-status">
                        <h6>15/06/19</h6>
                        <h6 class="font-dark status"> Sending</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box">
                    <div class="profile online"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                            alt="Avatar" /></div>
                    <div class="details">
                        <h5>Jony Lynetin</h5>
                        <h6>Hello</h6>
                    </div>
                    <div class="date-status">
                        <h6>30/11/19</h6>
                        <div class="badge badge-primary sm">8</div>
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
                <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i
                            data-feather="x"></i></a></div>
            </div>
        </div>
        <ul class="chat-main">
            <li>
                <div class="chat-box notification">
                    <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                            alt="Avatar" /></div>
                    <div class="details"><span>Josephin water</span>
                        <h5>Upload New Photos</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="date-status">
                        <h6>Now</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box notification">
                    <div class="profile bg-success offline"><span>J</span></div>
                    <div class="details"><span>Jony Today Birthday</span>
                        <h5>Upload New Photos</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="date-status">
                        <h6>1 hour ago</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box notification">
                    <div class="profile offline"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                            alt="Avatar" /></div>
                    <div class="details"><span>Sufiya Elija</span>
                        <h5>Comment On your Photo</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="date-status">
                        <h6>5 hour ago</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box notification">
                    <div class="profile unreachable"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                            alt="Avatar" />
                    </div>
                    <div class="details"><span>Pabelo Mukrani</span>
                        <h5>Invite Your New Friend</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="date-status">
                        <h6>6 hour ago</h6>
                    </div>
                </div>
            </li>
            <li>
                <div class="chat-box notification">
                    <div class="profile bg-success offline"><span>PM</span></div>
                    <div class="details"><span>Pabelo Mukrani</span>
                        <h5>Update Profile Picture</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing.</p>
                    </div>
                    <div class="date-status">
                        <h6>6 hour ago</h6>
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
                <div class="media-body text-right"> <a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i
                            data-feather="x"></i></a></div>
            </div>
            <div class="profile-box">
                <div class="media">
                    <div class="profile"><img class="bg-img" src="/theme/assets/images/contact/2.jpg" alt="Avatar" />
                    </div>
                    <div class="details">
                        <h5>Josephin water</h5>
                        <h6>Alabma , USA</h6>
                    </div>
                    <div class="details edit">
                        <form class="form-radious form-sm">
                            <div class="form-group mb-2">
                                <input class="form-control" type="text" name="username" value="Josephin water" />
                            </div>
                            <div class="form-group mb-0">
                                <input class="form-control" type="text" name="address" value="Alabma , USA" />
                            </div>
                        </form>
                    </div>
                    <div class="media-body"><a class="icon-btn btn-outline-light btn-sm pull-right edit-btn" href="#">
                            <i data-feather="edit"> </i></a></div>
                </div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Account</h3>
                    </div>
                    <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#">
                            <i data-feather="chevron-left"> </i></a></div>
                </div>
                <div class="theme-according" id="accordion">
                    <div class="card">
                        <div class="card-header" id="headingTwo" role="heading" data-toggle="collapse"
                            data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <a>Security<i class="fa fa-angle-down"></i></a></div>
                        <div class="collapse show" id="collapseTwo" aria-labelledby="headingTwo"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Show Security notification</h5>
                                    </div>
                                    <div class="media-right">
                                        <input class="js-switch8" type="checkbox" />
                                    </div>
                                </div>
                                <p> <b>Note : </b>turn on this setting to recive notification when a contact's
                                    security code has
                                    been changes.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingOne" role="heading" data-toggle="collapse"
                            data-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                            <a>Privacy<i class="fa fa-angle-down"></i></a></div>
                        <div class="collapse" id="collapseOne" aria-labelledby="headingOne" data-parent="#accordion">
                            <div class="card-body">
                                <ul class="privacy">
                                    <li>
                                        <h5>Last seen</h5>
                                        <input class="js-switch10" type="checkbox" checked="" />
                                        <p> <b>Note : </b>turn on this setting to whether your contact can see
                                            last seen or not.</p>
                                    </li>
                                    <li>
                                        <h5>Profile Photo</h5>
                                        <input class="js-switch11" type="checkbox" />
                                        <p>
                                            turn on this setting to whether your contact can see your profile or
                                            not.</p>
                                    </li>
                                    <li>
                                        <h5>About</h5>
                                        <input class="js-switch12" type="checkbox" />
                                        <p> <b>Note : </b>turn on this setting to whether your contact can see
                                            about status or not.</p>
                                    </li>
                                    <li>
                                        <h5>Status</h5>
                                        <input class="js-switch14" type="checkbox" />
                                        <p> <b>Note : </b>turn on this setting to whether your contact can see
                                            your status or not. </p>
                                    </li>
                                    <li>
                                        <h5>Read receipts</h5>
                                        <input class="js-switch16" type="checkbox" />
                                        <p> <b>Note : </b>If turn off this option you won't be able to see read
                                            recipts from contact.
                                            read receipts are always sent for group chats. </p>
                                    </li>
                                    <li>
                                        <h5>Groups</h5>
                                        <input class="js-switch13" type="checkbox" checked="" />
                                        <p> <b>Note : </b>turn on this setting to whether your contact can add
                                            in groups or not. </p>
                                    </li>
                                    <li>
                                        <h5>Screen Lock(Require Touch ID)</h5>
                                        <input class="js-switch17" type="checkbox" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingThree" role="heading" data-toggle="collapse"
                            data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            <a>Two Step
                                verification<i class="fa fa-angle-down"></i></a></div>
                        <div class="collapse" id="collapseThree" aria-labelledby="headingThree"
                            data-parent="#accordion">
                            <div class="card-body">
                                <div class="media">
                                    <div class="media-body">
                                        <h5>Enable</h5>
                                    </div>
                                    <div class="media-right">
                                        <input class="js-switch9" type="checkbox" />
                                    </div>
                                </div>
                                <p> <b>Note : </b>For added security, enable two-step verifiation, which will
                                    require a PIN when
                                    registering your phone number with Chitchat again.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFour" role="heading" data-toggle="collapse"
                            data-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                            <a>Change Number<i class="fa fa-angle-down"></i></a></div>
                        <div class="collapse" id="collapseFour" aria-labelledby="headingFour" data-parent="#accordion">
                            <div class="card-body change-number">
                                <h5>Your old country code & phone number</h5>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span
                                            class="input-group-text form-control m-0">+</span></div>
                                    <input class="form-control country-code" type="number" placeholder="01" />
                                    <input class="form-control" type="number" placeholder="1234567895" />
                                </div>
                                <h5>Your new country code & phone number</h5>
                                <div class="input-group">
                                    <div class="input-group-prepend"><span
                                            class="input-group-text form-control m-0">+</span></div>
                                    <input class="form-control country-code" type="number" placeholder="01" />
                                    <input class="form-control" type="number" placeholder="" />
                                </div>
                                <div class="text-right"> <a class="btn btn-outline-primary button-effect btn-sm"
                                        href="#">confirm</a></div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingFive" role="heading" data-toggle="collapse"
                            data-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                            <a>Request account
                                info<i class="fa fa-angle-down"></i></a></div>
                        <div class="collapse" id="collapseFive" aria-labelledby="headingFive" data-parent="#accordion">
                            <div class="card-body"><a class="p-0 req-info" id="demo" href="#"
                                    onclick="document.getElementById(&quot;demo&quot;).innerHTML = &quot;Request sent&quot;">Request
                                    Info </a>
                                <p> <b>Note : </b>Create a report of your account information and settings,
                                    which you can access ot
                                    port to another app.</p>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header" id="headingSix" role="heading" data-toggle="collapse"
                            data-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                            <a>Delete My account<i class="fa fa-angle-down"></i></a></div>
                        <div class="collapse" id="collapseSix" aria-labelledby="headingSix" data-parent="#accordion">
                            <div class="card-body"><a class="p-0 req-info font-danger" href="#">Delete Account
                                </a>
                                <p> <b>Note :</b>Deleting your account will delete your account info, profile
                                    photo, all groups &
                                    chat history.</p>
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
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#">
                        <i data-feather="chevron-right"> </i></a></div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Chat</h3>
                    </div>
                    <div class="media-right"><a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#">
                            <i data-feather="chevron-left"> </i></a></div>
                </div>
                <ul class="help">
                    <li>
                        <h5>Chat Backup</h5>
                        <ul class="switch-list">
                            <li>
                                <input class="js-switch5" type="checkbox" checked="" />
                                <h5>Auto Backup</h5>
                            </li>
                            <li>
                                <input class="js-switch6" type="checkbox" />
                                <h5>Include document</h5>
                            </li>
                            <li>
                                <input class="js-switch7" type="checkbox" />
                                <h5>Include Videos</h5>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h5>Chat wallpaper</h5>
                        <ul class="wallpaper">
                            <li><img class="bg-img" src="/theme/assets/images/wallpaper/2.jpg" alt="Avatar" />
                            </li>
                            <li><img class="bg-img" src="/theme/assets/images/wallpaper/1.jpg" alt="Avatar" />
                            </li>
                            <li><img class="bg-img" src="/theme/assets/images/wallpaper/3.jpg" alt="Avatar" />
                            </li>
                            <li><img class="bg-img" src="/theme/assets/images/wallpaper/4.jpg" alt="Avatar" />
                            </li>
                            <li><img class="bg-img" src="/theme/assets/images/wallpaper/5.jpg" alt="Avatar" />
                            </li>
                            <li><img class="bg-img" src="/theme/assets/images/wallpaper/6.jpg" alt="Avatar" />
                            </li>
                        </ul>
                    </li>
                    <li>
                        <h5> <a href="#">Archive all chat</a></h5>
                    </li>
                    <li>
                        <h5> <a href="#"> Clear all chats</a></h5>
                    </li>
                    <li>
                        <h5> <a class="font-danger" href="#">Delete all chats</a></h5>
                    </li>
                </ul>
            </div>
            <div class="media">
                <div class="media-body">
                    <h3>Chat</h3>
                    <h4>Control Your Chat Backup</h4>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#">
                        <i data-feather="chevron-right"> </i></a></div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Integratin</h3>
                    </div>
                    <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#">
                            <i data-feather="chevron-left"> </i></a></div>
                </div>
                <ul class="integratin">
                    <li>
                        <div class="media">
                            <div class="media-left"> <a class="fb" href="https://www.facebook.com/login"
                                    target="_blank"><i class="fa fa-facebook"></i>
                                    <h5>Facebook </h5>
                                </a></div>
                            <div class="media-right">
                                <div class="profile"><img class="bg-img" src="/theme/assets/images/contact/1.jpg"
                                        alt="Avatar" /></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left"> <a class="insta"
                                    href="https://www.instagram.com/accounts/login/?hl=en" target="_blank"><i
                                        class="fa fa-instagram"></i>
                                    <h5>instagram</h5>
                                </a></div>
                            <div class="media-right">
                                <div class="profile"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                                        alt="Avatar" /></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left"> <a class="twi" href="https://twitter.com/login" target="_blank"><i
                                        class="fa fa-twitter"></i>
                                    <h5>twitter </h5>
                                </a></div>
                            <div class="media-right">
                                <div class="profile"><img class="bg-img" src="/theme/assets/images/contact/3.jpg"
                                        alt="Avatar" /></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left"> <a class="ggl"
                                    href="https://accounts.google.com/signin/v2/identifier?service=mail&amp;passive=true&amp;rm=false&amp;continue=https%3A%2F%2Fmail.google.com%2Fmail%2F&amp;ss=1&amp;scc=1&amp;ltmpl=default&amp;ltmplcache=2&amp;emr=1&amp;osid=1&amp;flowName=GlifWebSignIn&amp;flowEntry=ServiceLogin"
                                    target="_blank"><i class="fa fa-google"></i>
                                    <h5>google </h5>
                                </a></div>
                            <div class="media-right">
                                <div class="profile"><img class="bg-img" src="/theme/assets/images/contact/2.jpg"
                                        alt="Avatar" /></div>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="media">
                            <div class="media-left"> <a class="slc" href="#"><i class="fa fa-slack"></i>
                                    <h5>Slack </h5>
                                </a></div>
                            <div class="media-right">
                                <div class="profile"><a href="https://slack.com/get-started#/" target="_blank"><i
                                            data-feather="plus-circle"></i></a></div>
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
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#">
                        <i data-feather="chevron-right"> </i></a></div>
            </div>
        </div>
        <div class="setting-block">
            <div class="block">
                <div class="media">
                    <div class="media-body">
                        <h3>Help</h3>
                    </div>
                    <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right previous" href="#">
                            <i data-feather="chevron-left"> </i></a></div>
                </div>
                <ul class="help">
                    <li>
                        <h5> <a href="#">FAQ</a></h5>
                    </li>
                    <li>
                        <h5> <a href="#"> Contact Us</a></h5>
                    </li>
                    <li>
                        <h5> <a href="#">Terms and Privacy Policy</a></h5>
                    </li>
                    <li>
                        <h5> <a href="#">Licenses</a></h5>
                    </li>
                    <li>
                        <h5> <a href="#">2019 - 20 Powered by Pixelstrap</a></h5>
                    </li>
                </ul>
            </div>
            <div class="media">
                <div class="media-body">
                    <h3>Help</h3>
                    <h4>You are Confusion, Tell me</h4>
                </div>
                <div class="media-right"> <a class="icon-btn btn-outline-light btn-sm pull-right next" href="#">
                        <i data-feather="chevron-right"></i></a></div>
            </div>
        </div>
    </div>
    <div class="status-tab custom-scroll dynemic-sidebar" id="status">
        <div class="my-status-box">
            <div class="status-content">
                <div class="media">
                    <div class="img-status">
                        <div class="user-status two"><img class="img-fluid bg-img"
                                src="/theme/assets/images/avtar/girls.jpg" alt="status" /></div>
                        <div class="upload-img">
                            <input type="file" />
                        </div>
                    </div>
                    <div class="media-body">
                        <h3>my status</h3>
                        <p>tap to add status Update</p>
                    </div>
                    <div><a class="icon-btn btn-outline-light btn-sm close-panel" href="#"><i data-feather="x"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="contact-status-box">
            <div class="theme-title">
                <h3>Recent Update</h3>
            </div>
            <div class="status-content">
                <ul>
                    <li class="user-status"><a class="lightbox img-status status" href="#statusbox"><img
                                class="img-fluid bg-img" src="/theme/assets/images/status-img/small/sm-1.jpg"
                                alt="status" /></a>
                        <div class="lightbox-target" id="statusbox"><img
                                src="/theme/assets/images/status-img/large/lg-1.jpg" alt="status" /><a
                                class="lightbox-close" href="#"></a></div>
                    </li>
                    <li>
                        <h5>Josephin water</h5>
                        <p>today , 8:30am</p>
                    </li>
                </ul>
            </div>
            <div class="status-content">
                <ul>
                    <li class="user-status"><a class="lightbox img-status status" href="#statusbox2"><img
                                class="img-fluid bg-img" src="/theme/assets/images/status-img/small/sm-2.jpg"
                                alt="status" /></a>
                        <div class="lightbox-target" id="statusbox2"><img
                                src="/theme/assets/images/status-img/large/lg-2.jpg" alt="status" /><a
                                class="lightbox-close" href="#"></a></div>
                    </li>
                    <li>
                        <h5>Jony Lynetin</h5>
                        <p>today , 10:30am</p>
                    </li>
                </ul>
            </div>
            <div class="status-content">
                <ul>
                    <li class="user-status"><a class="lightbox img-status status" href="#statusbox3"><img
                                class="img-fluid bg-img" src="/theme/assets/images/status-img/small/sm-3.jpg"
                                alt="status" /></a>
                        <div class="lightbox-target" id="statusbox3"><img
                                src="/theme/assets/images/status-img/large/lg-3.jpg" alt="status" /><a
                                class="lightbox-close" href="#"></a></div>
                    </li>
                    <li>
                        <h5>Sufiya Elija</h5>
                        <p>today , 11:00am</p>
                    </li>
                </ul>
            </div>
            <div class="status-content">
                <ul>
                    <li class="user-status"><a class="lightbox img-status status" href="#statusbox4"><img
                                class="img-fluid bg-img" src="/theme/assets/images/status-img/small/sm-4.jpg"
                                alt="status" /></a>
                        <div class="lightbox-target" id="statusbox4"><img
                                src="/theme/assets/images/status-img/large/lg-4.jpg" alt="status" /><a
                                class="lightbox-close" href="#"></a></div>
                    </li>
                    <li>
                        <h5>Mukrani Pabelo </h5>
                        <p>today , 9:55am</p>
                    </li>
                </ul>
            </div>
            <div class="status-content">
                <ul>
                    <li class="user-status"><a class="lightbox img-status status" href="#statusbox5"><img
                                class="img-fluid bg-img" src="/theme/assets/images/status-img/small/sm-5.jpg"
                                alt="status" /></a>
                        <div class="lightbox-target" id="statusbox5"><img
                                src="/theme/assets/images/status-img/large/lg-5.jpg" alt="status" /><a
                                class="lightbox-close" href="#"></a></div>
                    </li>
                    <li>
                        <h5>Pabelo Mukrani</h5>
                        <p>today , 12:05am</p>
                    </li>
                </ul>
            </div>
            <div class="status-content">
                <ul>
                    <li class="user-status"><a class="lightbox img-status status" href="#statusbox6"><img
                                class="img-fluid bg-img" src="/theme/assets/images/status-img/small/sm-3.jpg"
                                alt="status" /></a>
                        <div class="lightbox-target" id="statusbox6"><img
                                src="/theme/assets/images/status-img/large/lg-3.jpg" alt="status" /><a
                                class="lightbox-close" href="#"></a></div>
                    </li>
                    <li>
                        <h5>Sufiya Elija</h5>
                        <p>today , 11:00am</p>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</aside>
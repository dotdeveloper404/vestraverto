<aside class="app-sidebar active">
    <div class="apps">
        <ul class="apps-ul">
            <li id="files">
                <div class="theme-title">
                    <div class="media">
                        <div>
                            <h2>Files</h2>
                            <h4>Shared Media</h4>
                        </div>
                        <div class="media-body media-body text-right">
                            <a href="javascript:;" class="icon-btn btn-sm btn-outline-light close-apps">
                                <i data-feather="x"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="theme-tab">
                    <ul class="nav nav-tabs">
                        <li class="nav-item">
                            <a href="#mediaTab" data-toggle="pill" class="nav-link button-effect active">Media</a>
                        </li>
                        <li class="nav-item">
                            <a href="#linkTab" data-toggle="pill" class="nav-link button-effect">Link</a>
                        </li>
                        <li class="nav-item">
                            <a href="#docsTab" data-toggle="pill" class="nav-link button-effect">Docs</a>
                        </li>
                    </ul>
                </div>
                <div class="file-tab">
                    <div class="tab-content custom-scroll">
                        <div class="tab-pane active" id="mediaTab">
                            <div class="media-gallery portfolio-section grid-portfolio">
                                <div class="collapse-block open">
                                    <div>
                                        <h5 class="block-title">12/12/2019 <span class="badge badge-primary sm ml-2">8</span></h5>
                                        <div class="block-content">
                                            <div class="row share-media zoom-gallery">
                                                <div class="col-4 isotopeSelector filter">
                                                    <div class="media-big">
                                                        <div class="overlay">
                                                            <div class="border-portfolio">
                                                                <a href="{{ asset('theme/assets/images/gallery/1.jpg') }}">
                                                                    <div class="overlay-background">
                                                                        <i class="ti-plus" aria-hidden="true"></i>
                                                                    </div>
                                                                    <img class="img-fluid bg-img" src="{{ asset('theme/assets/images/gallery/1.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="media-small isotopeSelector filter">
                                                        <div class="overlay">
                                                            <div class="border-portfolio">
                                                                <a href="{{ asset('theme/assets/images/gallery/2.jpg') }}">
                                                                    <div class="overlay-background">
                                                                        <i class="ti-plus" aria-hidden="true"></i>
                                                                    </div>
                                                                    <img class="img-fluid bg-img" src="{{ asset('theme/assets/images/gallery/2.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media-small isotopeSelector filter">
                                                        <div class="overlay">
                                                            <div class="border-portfolio">
                                                                <a href="{{ asset('theme/assets/images/gallery/3.jpg') }}">
                                                                    <div class="overlay-background">
                                                                        <i class="ti-plus" aria-hidden="true"></i>
                                                                    </div>
                                                                    <img class="img-fluid bg-img" src="{{ asset('theme/assets/images/gallery/3.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-4">
                                                    <div class="media-small isotopeSelector filter">
                                                        <div class="overlay">
                                                            <div class="border-portfolio">
                                                                <a href="{{ asset('theme/assets/images/gallery/4.jpg') }}">
                                                                    <div class="overlay-background">
                                                                        <i class="ti-plus" aria-hidden="true"></i>
                                                                    </div>
                                                                    <img class="img-fluid bg-img" src="{{ asset('theme/assets/images/gallery/4.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="media-small isotopeSelector filter fashion">
                                                        <div class="overlay">
                                                            <div class="border-portfolio">
                                                                <a href="{{ asset('theme/assets/images/gallery/5.jpg') }}">
                                                                    <div class="overlay-background">
                                                                        <i class="ti-plus" aria-hidden="true"></i>
                                                                    </div>
                                                                    <img class="img-fluid bg-img" src="{{ asset('theme/assets/images/gallery/5.jpg') }}">
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="linkTab">
                            <div class="link-group">
                                <div class="media">
                                    <i data-feather="link"></i>
                                    <div class="media-body">
                                        <h5 class="mt-0">Jquery Template</h5>
                                        <h6>12:05 PM Today </h6>
                                    </div>
                                </div>
                                <a href="{{ url('/') }}">{{ url('/') }}</a>
                                {{-- <div class="media">
                                    <img class="img-fluid" src="{{ asset('theme/assets/images/file_icons/12.png') }}">
                                    <div class="media-body">
                                        <h5>React Template</h5>
                                        <h6 class="mt-0">Functionality integration project.</h6>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="tab-pane fade" id="docsTab">
                            <ul class="chat-main">
                                <li>
                                    <div class="chat-box">
                                        <div class="media">
                                            <div class="profile">
                                                <a href="javascript:;" class="icon-btn btn-outline-danger btn-xl pull-right rouded15">
                                                    <i class="fa fa-file-code-o"></i>
                                                </a>
                                            </div>
                                            <div class="details">
                                                <h5>messenger.html</h5>
                                                <h6>2, octomber 2019</h6>
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
                    </div>
                </div>
            </li>
        </ul>
    </div>
    <div class="app-list">
        <ul class="app-list-ul custom-scroll">
            <li>
                <a href="files" class="icon-btn btn-outline-success btn-sm button-effect"><i data-feather="file"></i></a>
                <h5>Files</h5>
            </li>
        </ul>
    </div>
</aside>
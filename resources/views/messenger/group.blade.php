@extends('layouts.app')

@section('content')

<body class="sidebar-active">

    <div class="chitchat-container sidebar-toggle">

        <!--group left  corner side bar-->
        @include('messenger.partials._left_side_bar')

        <!--group chat side bar-->
        @include('messenger.partials._group_chat_side_bar')


        <!--group chat side bar-->
        @include('messenger.partials._main_chat_bar')


        <!--right corner  side bar-->
        @include('messenger.partials._right_corner_side_bar')



    </div>

    <div class="modal fade add-popup add-contact-modal" id="groupModalCenter" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Create Group</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form action="{{route('group.store')}}" method="POST" class="">
                    @csrf
                    <div class="modal-body">

                        <div class="form-group">
                            <h5>Group Name </h5>
                            <input required name="name" class="form-control" id="exampleInputEmail1" type="text"
                                placeholder="" />
                        </div>
                        <div class="form-group mb-0">
                            <h5>Description</h5>
                            <textarea style="height: 100px; width: 100%;resize: none;" name="description"></textarea>
                        </div>

                    </div>
                    <div class="modal-footer">

                        <input class="btn btn-primary btn-sm" value="Add Group" type="submit">
                        <button class="btn btn-danger button-effect btn-sm" type="button"
                            data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade add-popup add-contact-modal" id="inviteUserModalCenter" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Invite User</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <form method="POST" action="{{route('group.invite',$uuid)}}" class="default-form">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group">
                            <h5>Email Address </h5>
                            <input required name="email" class="form-control" id="exampleInputEmail1" type="email"
                                placeholder="" />
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-primary btn-sm" type="submit">Send Invitation</button>
                        <button class="btn btn-danger button-effect btn-sm" type="button"
                            data-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>


    <div class="modal fade add-popup add-contact-modal" id="groupUsersModalCenter" tabindex="-1" role="dialog"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">
                        Group Users</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body">
                    <ul class="list-group">
                        @foreach($group->users as $user)
                        <li class="list-group-item d-flex align-items-left justify-content-between">
                            <strong>{{$user->name}}</strong>
                            <span>{{$user->email}}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <div class="modal-footer">

                    <button class="btn btn-danger button-effect btn-sm" type="button"
                        data-dismiss="modal">Cancel</button>
                </div>

            </div>
        </div>
    </div>


    @section('scripts')

    <script src="/theme/assets/js/jquery-3.3.1.min.js"></script>
    <script src="/theme/assets/js/owl.carousel.js"></script>
    <script src="/theme/assets/js/popper.min.js"></script>
    <script src="/theme/assets/js/tippy-bundle.iife.min.js"></script>
    <script src="/theme/assets/js/bootstrap.js"></script>
    <script src="/theme/assets/js/switchery.js"></script>
    <script src="/theme/assets/js/easytimer.min.js"> </script>
    <script src="/theme/assets/js/index.js"> </script>
    <script src="/theme/assets/js/feather-icon/feather.min.js"></script>
    <script src="/theme/assets/js/feather-icon/feather-icon.js"></script>
    <script src="/theme/assets/js/ckeditor/ckeditor.js"></script>
    <script src="/theme/assets/js/ckeditor/styles.js"></script>
    <script src="/theme/assets/js/ckeditor/adapters/jquery.js"></script>
    <script src="/theme/assets/js/ckeditor/ckeditor.custom.js"></script>
    <script src="/theme/assets/js/date-picker/datepicker.js"></script>
    <script src="/theme/assets/js/date-picker/datepicker.en.js"></script>
    <script src="/theme/assets/js/date-picker/datepicker.custom.js"></script>
    {{-- <script src="/theme/assets/js/tour/intro.js"></script> --}}
    {{-- <script src="/theme/assets/js/tour/intro-init.js"></script> --}}
    <script src="/theme/assets/js/jquery.magnific-popup.js"></script>
    <script src="/theme/assets/js/zoom-gallery.js"></script>
    <script src="/theme/assets/js/script.js"></script>

    @endsection

</body>
@endsection

</html>
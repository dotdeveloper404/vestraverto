@extends('layouts.app')

@section('content')
<div class="sidebar-active">
    <div class="chitchat-container sidebar-toggle">
        {{-- GROUP LEFT CORNER SIDE BAR --}}
        @include('messenger.partials._left_side_bar')
        
        {{-- GROUP CHAT SIDE BAR --}}
        @include('messenger.partials._group_chat_side_bar')
        
        {{-- GROUP CHAT SIDE BAR --}}
        @include('messenger.partials._main_chat_bar')

        {{-- RIGHT CORNER SIDE BAR --}}
        @include('messenger.partials._right_corner_side_bar')
    </div>

    <div class="modal fade add-popup add-contact-modal" id="groupModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <form action="{{route('group.store')}}" method="POST" class="">
            @csrf
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Create Group</h2>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="name">Group Name </label>
                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                        </div>
                        <div class="form-group mb-0">
                            <label>Description</label>
                            <textarea name="description" id="description" class="form-control" rows="5" placeholder="Enter Description"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Add Group</button>
                        <button type="button" class="btn btn-danger button-effect btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="modal fade add-popup add-contact-modal" id="inviteUserModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <form method="POST" action="{{route('group.invite',$uuid)}}" class="default-form">
            @csrf
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Invite User</h2>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="email">Email Address</label>
                            <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="submit" class="btn btn-primary btn-sm">Send Invitation</button>
                        <button type="button" class="btn btn-danger button-effect btn-sm" data-dismiss="modal">Cancel</button>
                    </div>
                </div>
            </div>
        </form>
    </div>


    <div class="modal fade add-popup add-contact-modal" id="groupUsersModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title">Group Users</h2>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
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
                    <button type="button" class="btn btn-danger button-effect btn-sm" data-dismiss="modal">Cancel</button>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('scripts')
    <script src="{{ asset('theme/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('theme/assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/tippy-bundle.iife.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('theme/assets/js/switchery.js') }}"></script>
    <script src="{{ asset('theme/assets/js/easytimer.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/index.js') }}"></script>
    <script src="{{ asset('theme/assets/js/feather-icon/feather.min.js') }}"></script>
    <script src="{{ asset('theme/assets/js/feather-icon/feather-icon.js') }}"></script>
    <script src="{{ asset('theme/assets/js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('theme/assets/js/ckeditor/styles.js') }}"></script>
    <script src="{{ asset('theme/assets/js/ckeditor/adapters/jquery.js') }}"></script>
    <script src="{{ asset('theme/assets/js/ckeditor/ckeditor.custom.js') }}"></script>
    <script src="{{ asset('theme/assets/js/date-picker/datepicker.js') }}"></script>
    <script src="{{ asset('theme/assets/js/date-picker/datepicker.en.js') }}"></script>
    <script src="{{ asset('theme/assets/js/date-picker/datepicker.custom.js') }}"></script>
    <script src="{{ asset('theme/assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('theme/assets/js/zoom-gallery.js') }}"></script>
    <script src="{{ asset('theme/assets/js/script.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        };
    </script>
    <script>
        @if(session()->has('msg'))
            toastr["{{ session()->get('msg')['type'] }}"]("{{ session()->get('msg')['text'] }}");
        @endif
    </script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>
@endsection
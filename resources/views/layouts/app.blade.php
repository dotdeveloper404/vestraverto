<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="description" content="Chitchat">
    <meta name="keywords" content="Chitchat">
    <meta name="author" content="Chitchat">
    <link rel="icon" href="{{ asset('theme/assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="shortcut icon" href="{{ asset('theme/assets/images/favicon/favicon.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,500,600&amp;display=swap">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rubik:300,300i,400,400i,500,500i,700,700i,900,900i&amp;display=swap">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/date-picker.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/magnific-popup.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/css/style.css') }}" media="screen" id="color">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/skins/moono-lisa/editor.css?t=HBDD') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/scayt/skins/moono-lisa/scayt.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/scayt/dialogs/dialog.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/tableselection/styles/tableselection.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/wsc/skins/moono-lisa/wsc.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('theme/assets/js/ckeditor/plugins/copyformatting/styles/copyformatting.css') }}">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/custom.css') }}">
</head>
<body>
    <div id="app">
        <main class="">
            @yield('content')
        </main>
    </div>

    <script src="{{ asset('js/app.js') }}"> </script>
    @yield('scripts')
    
</body>
</html>
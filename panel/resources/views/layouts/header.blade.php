<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to admin panel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Required CSS -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap/dist/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/css/select2.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/AdminLTE.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/skin-blue.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/dist/css/skins/skin-green.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/pace/pace-theme-flash.css')}}">
    
    <!-- Datatables Buttons -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css')}}">

    <!-- textarea editor -->
    <link rel="stylesheet" href="{{ asset('assets/bower_components/codemirror/lib/codemirror.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/froala_editor/css/froala_style.min.css')}}">
    <link rel="stylesheet" href="{{ asset('assets/bower_components/froala_editor/css/themes/royal.min.css')}}">
    <!-- /texarea editor; -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{ asset('assets/dist/css/mystyle.css')}}">

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="{{ asset('assets/bower_components/jquery/jquery-3.3.1.min.js')}}"></script>
    <script src="{{ asset('assets/bower_components/sweetalert2/sweetalert2.all.min.js')}}"></script>
    <script src="{{ asset('assets/bower_components/select2/js/select2.full.min.js')}}"></script>
    <script src="{{ asset('assets/bower_components/moment/min/moment.min.js')}}"></script>
    <script src="{{ asset('assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>    
</head>

<!-- Must Load First -->

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="dashboard" class="logo" style="height: 70px;">
    
    <img src="{{('assets\dist\img\logo.png')}}" height="70px;">
</a>

<nav class="navbar navbar-static-top" role="navigation">
    <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
    </a>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
                <!-- Menu Toggle Button -->
                <a href="{{ url('/home') }}" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                 

                       @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                       <span class="me-2">   <a href="{{ url('/home') }}" style="color:white">{{ Auth::user()->name }}</span></a></span>
                      
                    @else
                       <span class="hidden-xs"> <a href="{{ route('login') }}">Login</a></span>

                        @if (Route::has('register'))
                       <span class="hidden-xs">     <a href="{{ route('register') }}">Register</a></span>
                        @endif
                    @endauth
                </div>
            @endif
                </a>
               
            </li>
             <li class="user user-menu"> 
             
                                 <a class="dropdown-item" style="display:block;width:40%" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form></li>
        </ul>
    </div>
</nav>      </header>
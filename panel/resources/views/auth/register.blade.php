@extends('layouts.app')
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to Ichaapurti</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <!-- Meta Tag -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Required CSS -->
    <link rel="stylesheet" href="assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="assets/bower_components/select2/css/select2.min.css">
    <link rel="stylesheet" href="assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="assets/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="assets/dist/css/skins/skin-green.min.css">
    <link rel="stylesheet" href="assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="assets/bower_components/pace/pace-theme-flash.css">
    
    <!-- Datatables Buttons -->
    <link rel="stylesheet" href="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css">

    <!-- textarea editor -->
    <link rel="stylesheet" href="assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="assets/bower_components/froala_editor/css/themes/royal.min.css">
    <!-- /texarea editor; -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/dist/css/mystyle.css">

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="assets/bower_components/select2/js/select2.full.min.js"></script>
    <script src="assets/bower_components/moment/min/moment.min.js"></script>
    <script src="assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>    
    <style type="text/css">
        .text {
            color: white;
            font-weight: bold; 
            font-size: 14px;
           
        }
    </style>
</head>

<!-- Must Load First -->

<body class="hold-transition skin-green sidebar-mini">
    <div >

       
   

      <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div >
            <header class="main-header">
              <a href="index.php" class="logo" style="height: 70px;">
    
    <span><img src="{{asset('assets\dist\img\logo.png')}}" height="70px;"></span>
</a>
<nav class="navbar navbar-static-top" role="navigation" style="height: 70px;">
   <div style="float: left;text-transform: uppercase; " class="text"><h3>Welcome to Ichaapurti</h3></div>
    <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
            <!-- User Account Menu -->
           
            <li class="dropdown user user-menu" style="padding-top: 10px;">
                <!-- Menu Toggle Button -->
               
                   
                <div class="top-right links">
                   
                      <span class="hidden-xs" >  <a href="../fornthand/about_us.php" class="text" >About Us</a></span>&nbsp;|&nbsp;
                 
                       <span class="hidden-xs"> <a href="../demo/login" class="text">Login</a></span>&nbsp;|&nbsp;

                       
                       <span class="hidden-xs">  <a href="register.php" class="text">Register</a>&nbsp;&nbsp;&nbsp;&nbsp;</span>
                    
                </div>
          
            </li>
        </ul>
    </div>
</nav>      </header>
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2>{{ __('Register') }}</h2></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
 <input id="user_type" type="hidden" class="form-control" name="user_type" value="customer">
                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-md-4 col-form-label text-md-right">{{ __('mobile') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="tel" class="form-control" name="email" value="{{ old('email') }}" required autocomplete="mobile">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                      

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

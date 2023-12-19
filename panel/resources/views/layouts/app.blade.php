<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Welcome to Ichaa Purti</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
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

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@3.3.7/dist/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>

<!-- Must Load First -->
<script src="{{ asset('assets/bower_components/jquery/jquery-3.3.1.min.js')}}"></script>
<script src="{{ asset('assets/bower_components/sweetalert2/sweetalert2.all.min.js')}}"></script>
<script src="{{ asset('assets/bower_components/select2/js/select2.full.min.js')}}"></script>
<script src="{{ asset('assets/bower_components/moment/min/moment.min.js')}}"></script>
<script src="{{ asset('assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js')}}"></script>      

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
               
               

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                   

                    <!-- Right Side Of Navbar -->
                   
                </div>
            </div>
        </nav>

        <main>
            @yield('content')
        </main>
    </div>
</body>
</html>

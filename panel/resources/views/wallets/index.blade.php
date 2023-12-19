@include('layouts.header')
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="dashboard" class="logo">
    
    <span class="logo-lg"><b>Satta Matka</b></span>
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
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                    <img src="assets/dist/img/usersys-min.png" class="user-image" alt="User Image">
                    <!-- hidden-xs hides the username on small devices so only the image appears. -->
                    <span class="hidden-xs">Hi, Admin</span>
                       @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                      <span class="hidden-xs">  <a href="{{ url('/home') }}">Home</a></span>
                    @else
                       <span class="hidden-xs"> <a href="{{ route('login') }}">Login</a></span>

                        @if (Route::has('register'))
                       <span class="hidden-xs">     <a href="{{ route('register') }}">Register</a></span>
                        @endif
                    @endauth
                </div>
            @endif
                </a>
                <ul class="dropdown-menu">
                    <!-- The user image in the menu -->
                    <li class="user-header">
                     Test
                    </li>
                    <!-- Menu Body -->
                    <li class="user-footer">
                        <div class="pull-left">

                            <a href="users/edit/1" class="btn btn-warning btn-flat">
                                Edit Profile                            </a>
                        </div>
                        <div class="pull-right">
                            <a href="#" id="logout" class="btn btn-danger btn-flat">Logout</a>
                        </div>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>      </header>

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    My Wallets     
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">E My Wallets </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Relation Data Examiner Class</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="mt-2 mb-3">
            <a href="#/add" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add Data</a>
            <button type="button" onclick="reload_ajax()" class="btn btn-sm bg-maroon btn-flat btn-default"><i class="fa fa-refresh"></i> Reload</button>
            <div class="pull-right">
                <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-danger" type="button"><i class="fa fa-trash"></i> Delete</button>
            </div>
        </div>
        <form action="#" id="bulk" method="post" accept-charset="utf-8">
<input type="hidden" name="csrf_test_name" value="bbbf501ef3dd47323a1c025baad4c5af" />                                                                     
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Password</th>
                    <th>Examiner</th>
                    <th>Class</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">
                        <input type="checkbox" class="select_all">
                    </th>
                </tr>
            </thead>
            <!-- <tfoot>
                <tr>
                    <th>#</th>
                    <th>Password</th>
                    <th>Lecturer</th>
                    <th>Class</th>
                    <th class="text-center">Edit</th>
                    <th class="text-center">
                        <input type="checkbox" class="select_all">
                    </th>
                </tr>
            </tfoot> -->
        </table>
        </form>    </div>
</div>

      </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- /.content-wrapper -->
@include('layouts.footer')
           
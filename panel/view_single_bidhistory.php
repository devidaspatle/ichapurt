<?php
$singleid=$_GET['singleId'];
$customerId=$_GET['customerId'];

$con = mysqli_connect("localhost","ichaapu1_ayub","u?),0%?-p[8L","ichaapu1_ayub");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM  tbl_singleakata where id='$singleid' and customerId='$customerId'";
$result = mysqli_query($con,$sql);

// Numeric array
$bidhistory = mysqli_fetch_array($result, MYSQLI_NUM);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Welcome to admin panel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    
    <!-- Required CSS -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/select2/css/select2.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/skins/skin-blue.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/skins/skin-green.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/pace/pace-theme-flash.css">
    
    <!-- Datatables Buttons -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/css/buttons.bootstrap.min.css">

    <!-- textarea editor -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/codemirror/lib/codemirror.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/froala_editor/css/froala_editor.pkgd.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/froala_editor/css/froala_style.min.css">
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/bower_components/froala_editor/css/themes/royal.min.css">
    <!-- /texarea editor; -->

    <!-- Custom CSS -->
    <link rel="stylesheet" href="https://ichaapurti.com/panel/assets/dist/css/mystyle.css">

    <!-- include summernote css/js -->
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <script src="https://ichaapurti.com/panel/assets/bower_components/jquery/jquery-3.3.1.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/sweetalert2/sweetalert2.all.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/select2/js/select2.full.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/moment/min/moment.min.js"></script>
    <script src="https://ichaapurti.com/panel/assets/bower_components/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>    
</head>

<!-- Must Load First -->

<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

        <header class="main-header">
            <a href="dashboard" class="logo" style="height: 70px;">
    
    <img src="assets\dist\img\logo.png" height="70px;">
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
                <a href="https://ichaapurti.com/panel/home" class="dropdown-toggle" data-toggle="dropdown">
                    <!-- The user image in the navbar-->
                 

                                       <div class="top-right links">
                                           <span class="me-2">   <a href="https://ichaapurti.com/panel/home" style="color:white">admin</span></a></span>
                      
                                    </div>
                            </a>
               
            </li>
             <li class="user user-menu"> 
             
                                 <a class="dropdown-item" style="display:block;width:40%" href="https://ichaapurti.com/panel/logout"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        Logout
                                    </a>

                                    <form id="logout-form" action="https://ichaapurti.com/panel/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="lS6HTNgwBGyAhndXJuWo7qo73QrnACj61j7Mrv5k">                                    </form></li>
        </ul>
    </div>
</nav>      </header>
        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="https://ichaapurti.com/panel/assets/dist/img/usersys-min.png" class="img-circle" alt="User Image">
            </div>
           
        </div>
        
        <ul class="sidebar-menu" data-widget="tree">
           
            <!-- Optionally, you can add icons to the links -->
             <li class="active"><a href="dashboard"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
             
             <li class="">
                <a href="https://ichaapurti.com/panel/mattakaresults" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Results</span>
                </a>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/jodicharts" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Jodi Charts</span>
                </a>
            </li>
              <li class="">
                <a href="https://ichaapurti.com/panel/customers" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Customer</span>
                </a>
            </li>
             
            <li class="treeview">
              
                <a href="#"><i class="fa fa-folder-open"></i> <span>My Wallet</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="">
                        <a href="https://ichaapurti.com/panel/walletsbals">
                            <i class="fa fa-bars"></i> 
                             Wallet Balance
                        </a>
                    </li>
                   
                 
                   
                    <li class="">
                        <a href="https://ichaapurti.com/panel/fundrequests">
                            <i class="fa fa-bars"></i>
                               Funds Request History
                        </a>
                    </li>
                   
                    <li class="">
                        <a href="https://ichaapurti.com/panel/transferpoints">
                            <i class="fa fa-bars"></i>
                             Transfer Points
                        </a>
                    </li>
                </ul>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/banjaccounts" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Bank Account</span>
                </a>
            </li>
              <li class="">
                <a href="https://ichaapurti.com/panel/bidhistorys" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Bid History</span>
                </a>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/winhistorys" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Win History</span>
                </a>
            </li>
          
           
            <li class="">
                <a href="https://ichaapurti.com/panel/notices" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Manage Notice</span>
                </a>
            </li>
          
              <li class="">
                <a href="https://ichaapurti.com/panel/onlinemattakas" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>Online Mattaka</span>
                </a>
            </li>
             <li class="">
                <a href="https://ichaapurti.com/panel/aboutmattakas" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span>About Mattaka</span>
                </a>
            </li>
             <li class="">
                <a href="https://ichaapurti.com/panel/categories" rel="noopener noreferrer">
                    <i class="fa fa-file"></i> <span> Manage Category  </span>
                </a>
            </li>
          
            <li class="">
                <a href="users" rel="noopener noreferrer">
                    <i class="fa fa-users"></i> <span> Change Password</span>
                </a>
            </li>
            <li class="">
                <a href="https://ichaapurti.com/panel/logout" rel="noopener noreferrer" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"> 
                    <i class="fa fa-cogs"></i> Logout 
                                    <form id="logout-form" action="https://ichaapurti.com/panel/logout" method="POST" class="d-none">
                                        <input type="hidden" name="_token" value="lS6HTNgwBGyAhndXJuWo7qo73QrnACj61j7Mrv5k">                                    </form>
                </a>
            </li>
            
                    </ul>

    </section>
    <!-- /.sidebar -->
</aside>  
      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Bid History
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Single Akata Number </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
   
    <div class="box-body">
        
         <div class="mt-2 mb-3">
          <div class="row">
             <div class="col-md-12">
                
                 <table style="width:100%">
                  <tr style="color: black">
                    <td colspan="4" style="text-align: left;"><h3>  Single Akata Number</h3></td>
                    <td  style="text-align: right;">  <a href="https://ichaapurti.com/panel/bidhistorys"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                  </tr>
                    <tr style="color: black">
                    <td colspan="10" style="text-align: left;">&nbsp;</td>
                  </tr>
                   <tr style="color: black; padding-top:20px;">
                           <td>0</td>
                           <td>1</td>
                           <td>2</td>
                           <td>3</td>
                           <td>4</td>
                           <td>5</td>
                           <td>6</td>
                           <td>7</td>
                           <td>8</td>
                           <td>9</td>
                        </tr>
                        <tr>
                           <td><input type="number" name="akata0" class="form-control" readonly value="<?php  echo  $bidhistory['akata01']; ?>"  readonly /></td>
                           <td><input type="number" name="akata1" class="form-control" readonly value="<?php echo $bidhistory['akata02']; ?>"  readonly /></td>
                           <td><input type="number" name="akata2" class="form-control" readonly value="<?php echo $bidhistory['akata03']; ?>"  readonly /></td>
                           <td><input type="number" name="akata3" class="form-control" readonly value="<?php echo $bidhistory['akata04']; ?>"  readonly  /></td>
                           <td><input type="number" name="akata4" class="form-control" readonly value="<?php echo $bidhistory['akata05']; ?>"  readonly /></td>
                           <td><input type="number" name="akata5" class="form-control" readonly value="<?php echo $bidhistory['akata06']; ?>"  readonly/></td>
                           <td><input type="number" name="akata6" class="form-control" readonly value="<?php echo $bidhistory['akata07']; ?>"  readonly/></td>
                           <td><input type="number" name="akata7" class="form-control" readonly value="<?php echo $bidhistory['akata08']; ?>"  readonly/></td>
                           <td><input type="number" name="akata8" class="form-control" readonly value="<?php echo $bidhistory['akata09']; ?>"  readonly/></td>
                           <td><input type="number" name="akata9" class="form-control" readonly value="<?php echo $bidhistory['akata10']; ?>" readonly /></td>
                        </tr>
<tr style="color: black;padding-bottom:20px;">
                    <td colspan="5">&nbsp;</td>
                    
                  </tr>
                   <tr style="color: black;padding-bottom:20px;">
                  
                  </tr>
                 
                   
                 </table>
                </div>
            </div>
             
          
            
         
              <div class="row">
               
                <div class="col-md-12">&nbsp;</div>
               
              </div>
           </div>
           </div>
</div>
      </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- /.content-wrapper -->
<!-- Main Footer -->
            <footer class="main-footer">
                <!-- To the right -->
                <div class="pull-right hidden-xs">
                   Ichapurti
                </div>
                <!-- Default to the left -->
                <strong>&copy; 2022 -Ichapurti</strong> All rights reserved
            </footer>
<!-- <p> © 2022 All Rights Reserved | Designed &amp; Developed by 
                    <a href="http://globaledu.net.in/" target="_blank">
                    <span> Global Education Limited </span>
                    </a>
                </p> -->
            </div>

            <!-- Required JS -->
            <script src="https://ichaapurti.com/panel/assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/js/jquery.dataTables.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

            <!-- Datatables Buttons -->
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/dataTables.buttons.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.bootstrap.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/JSZip-2.5.0/jszip.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/pdfmake.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/pdfmake-0.1.36/vfs_fonts.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.html5.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.print.min.js"></script>
            <script src="assets/bower_components/datatables.net-bs/plugins/Buttons-1.5.6/js/buttons.colVis.min.js"></script>

            <script src="assets/bower_components/pace/pace.min.js"></script>
            <script src="assets/dist/js/adminlte.min.js"></script>

            <!-- Textarea editor -->
            <script src="assets/bower_components/codemirror/lib/codemirror.min.js"></script>
            <script src="assets/bower_components/codemirror/mode/xml.min.js"></script>
            <script src="assets/bower_components/froala_editor/js/froala_editor.pkgd.min.js"></script>

            <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

            <!-- App JS -->
            <script src="assets/dist/js/app/dashboard.js"></script>


            </body>

            </html>
        </div>
    </body>
</html>
           
<?php
$con = mysqli_connect("localhost","ichaapu1_ayub","u?),0%?-p[8L","ichaapu1_ayub");

// Check connection
if (mysqli_connect_errno()) {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  exit();
}

$sql = "SELECT * FROM  tbl_singleakata where ";
$result = mysqli_query($con,$sql);

// Numeric array
$row = mysqli_fetch_array($result, MYSQLI_NUM);
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
                           <td colspan="4" style="text-align: left;">
                              <h3> Patti Data</h3>
                           </td>
                           <td colspan="6" style="text-align: right;">  <a href="{{ route('bidhistorys.index') '];?>"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">1</td>
                        </tr>
                        <tr style="color: black">
                           <td>137</td>
                           <td>128</td>
                           <td>146</td>
                           <td>236</td>
                           <td>245</td>
                           <td>290</td>
                           <td>380</td>
                           <td>470</td>
                           <td>489</td>
                           <td>560</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata137" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata128" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata146" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata236" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata245" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata290" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata380" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata470" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata489" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata560" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"    min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>678</td>
                           <td>579</td>
                           <td>119</td>
                           <td>155</td>
                           <td>227</td>
                           <td>335</td>
                           <td>344</td>
                           <td>399</td>
                           <td>588</td>
                           <td>669</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata678" class="form-control" readonly  value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata579" class="form-control" readonly  value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata119" class="form-control" readonly  value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata155" class="form-control" readonly  value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata227" class="form-control" readonly  value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata335" class="form-control" readonly  value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata344" class="form-control" readonly  value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata399" class="form-control" readonly  value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata588" class="form-control" readonly  value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata669" class="form-control" readonly  value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>777</td>
                           <td>100</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata777" class="form-control" readonly  min="10" /></td>
                           <td><input type="Number" name="akata100" class="form-control" readonly  min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">2</td>
                        </tr>
                        <tr style="color: black">
                           <td>129</td>
                           <td>138</td>
                           <td>147</td>
                           <td>156</td>
                           <td>237</td>
                           <td>246</td>
                           <td>345</td>
                           <td>390</td>
                           <td>480</td>
                           <td>570</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata129" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata138" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata147" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata156" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata237" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata246" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata345" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata390" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata480" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata570" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>589</td>
                           <td>679</td>
                           <td>110</td>
                           <td>228</td>
                           <td>255</td>
                           <td>336</td>
                           <td>499</td>
                           <td>660</td>
                           <td>688</td>
                           <td>778</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata589" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata679" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata110" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata228" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata255" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata336" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata499" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata660" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata688" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata778" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>200</td>
                           <td>444</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata200" class="form-control" readonly  min="10" /></td>
                           <td><input type="Number" name="akata444" class="form-control" readonly  min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">3</td>
                        </tr>
                        <tr style="color: black">
                           <td>120</td>
                           <td>139</td>
                           <td>148</td>
                           <td>157</td>
                           <td>238</td>
                           <td>247</td>
                           <td>256</td>
                           <td>346</td>
                           <td>490</td>
                           <td>580</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata120" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata139" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata148" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata157" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata238" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata247" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata256" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata346" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata490" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata580" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>670</td>
                           <td>689</td>
                           <td>166</td>
                           <td>229</td>
                           <td>337</td>
                           <td>355</td>
                           <td>445</td>
                           <td>599</td>
                           <td>779</td>
                           <td>788</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata670" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata689" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata166" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata229" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata337" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata355" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata445" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata599" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata779" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata788" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>300</td>
                           <td>111</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata300" class="form-control" readonly  min="10" /></td>
                           <td><input type="Number" name="akata111" class="form-control" readonly  min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">4</td>
                        </tr>
                        <tr style="color: black">
                           <td>130</td>
                           <td>149</td>
                           <td>158</td>
                           <td>167</td>
                           <td>239</td>
                           <td>248</td>
                           <td>257</td>
                           <td>347</td>
                           <td>356</td>
                           <td>590</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata130" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata149" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata158" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata167" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata239" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata248" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata257" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata347" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata356" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata590" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>680</td>
                           <td>789</td>
                           <td>112</td>
                           <td>220</td>
                           <td>266</td>
                           <td>338</td>
                           <td>446</td>
                           <td>455</td>
                           <td>699</td>
                           <td>770</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata680" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata789" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata112" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata220" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata266" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata338" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata446" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata455" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata699" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata770" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>400</td>
                           <td>888</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata400" class="form-control" readonly  min="10" /></td>
                           <td><input type="Number" name="akata888" class="form-control" readonly  min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">5</td>
                        </tr>
                        <tr style="color: black">
                           <td>140</td>
                           <td>159</td>
                           <td>168</td>
                           <td>230</td>
                           <td>249</td>
                           <td>258</td>
                           <td>267</td>
                           <td>348</td>
                           <td>357</td>
                           <td>456</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata140" class="form-control" readonly  value="<?php echo $bidhistory['akata01'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata159" class="form-control" readonly  value="<?php echo $bidhistory['akata02'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata168" class="form-control" readonly  value="<?php echo $bidhistory['akata03'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata230" class="form-control" readonly  value="<?php echo $bidhistory['akata04'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata249" class="form-control" readonly  value="<?php echo $bidhistory['akata05'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata258" class="form-control" readonly  value="<?php echo $bidhistory['akata06'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata267" class="form-control" readonly  value="<?php echo $bidhistory['akata07'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata348" class="form-control" readonly  value="<?php echo $bidhistory['akata08'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata357" class="form-control" readonly  value="<?php echo $bidhistory['akata09'];?>"  min="10" /></td>
                           <td><input type="Number" name="akata456" class="form-control" readonly  value="<?php echo $bidhistory['akata10'];?>"  min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>690</td>
                           <td>780</td>
                           <td>113</td>
                           <td>122</td>
                           <td>177</td>
                           <td>339</td>
                           <td>366</td>
                           <td>447</td>
                           <td>799</td>
                           <td>889</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata690" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata780" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata113" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata122" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata177" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata339" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata366" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata447" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata799" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata889" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>500</td>
                           <td>555</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata500" class="form-control" readonly  min="10" /></td>
                           <td><input type="Number" name="akata555" class="form-control" readonly  min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">6</td>
                        </tr>
                        <tr style="color: black">
                           <td>123</td>
                           <td>150</td>
                           <td>169</td>
                           <td>178</td>
                           <td>240</td>
                           <td>259</td>
                           <td>268</td>
                           <td>349</td>
                           <td>358</td>
                           <td>367</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata123" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata150" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata169" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata178" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata240" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata259" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata268" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata349" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata358" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata367" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>457</td>
                           <td>790</td>
                           <td>114</td>
                           <td>277</td>
                           <td>330</td>
                           <td>448</td>
                           <td>466</td>
                           <td>556</td>
                           <td>880</td>
                           <td>899</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata457" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata790" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata114" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata277" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata330" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata448" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata466" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata556" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata880" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata899" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"    min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>600</td>
                           <td>222</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata600" class="form-control" readonly   min="10" /></td>
                           <td><input type="Number" name="akata222" class="form-control" readonly   min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">7</td>
                        </tr>
                        <tr style="color: black">
                           <td>124</td>
                           <td>160</td>
                           <td>179</td>
                           <td>250</td>
                           <td>269</td>
                           <td>278</td>
                           <td>340</td>
                           <td>359</td>
                           <td>368</td>
                           <td>458</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata124" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata160" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata179" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata250" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata269" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata278" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata340" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata359" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata368" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata458" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"    min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>467</td>
                           <td>890</td>
                           <td>115</td>
                           <td>133</td>
                           <td>188</td>
                           <td>223</td>
                           <td>377</td>
                           <td>449</td>
                           <td>557</td>
                           <td>566</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata467" class="form-control" readonly value="<?php echo $bidhistory['akata01'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata890" class="form-control" readonly value="<?php echo $bidhistory['akata02'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata115" class="form-control" readonly value="<?php echo $bidhistory['akata03'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata133" class="form-control" readonly value="<?php echo $bidhistory['akata04'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata188" class="form-control" readonly value="<?php echo $bidhistory['akata05'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata223" class="form-control" readonly value="<?php echo $bidhistory['akata06'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata377" class="form-control" readonly value="<?php echo $bidhistory['akata07'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata449" class="form-control" readonly value="<?php echo $bidhistory['akata08'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata557" class="form-control" readonly value="<?php echo $bidhistory['akata09'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata566" class="form-control" readonly value="<?php echo $bidhistory['akata10'];?>"    min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>700</td>
                           <td>999</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata17" class="form-control" readonly   min="10" /></td>
                           <td><input type="Number" name="akata17" class="form-control" readonly   min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">8</td>
                        </tr>
                        <tr style="color: black">
                           <td>125</td>
                           <td>134</td>
                           <td>170</td>
                           <td>189</td>
                           <td>260</td>
                           <td>279</td>
                           <td>350</td>
                           <td>369</td>
                           <td>378</td>
                           <td>459</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata125" class="form-control" readonly value="<?php echo $bidhistory['akata125'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata134" class="form-control" readonly value="<?php echo $bidhistory['akata134'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata170" class="form-control" readonly value="<?php echo $bidhistory['akata170'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata189" class="form-control" readonly value="<?php echo $bidhistory['akata189'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata260" class="form-control" readonly value="<?php echo $bidhistory['akata260'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata279" class="form-control" readonly value="<?php echo $bidhistory['akata279'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata350" class="form-control" readonly value="<?php echo $bidhistory['akata350'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata369" class="form-control" readonly value="<?php echo $bidhistory['akata369'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata378" class="form-control" readonly value="<?php echo $bidhistory['akata378'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata459" class="form-control" readonly value="<?php echo $bidhistory['akata459'];?>"    min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>468</td>
                           <td>567</td>
                           <td>116</td>
                           <td>224</td>
                           <td>233</td>
                           <td>288</td>
                           <td>440</td>
                           <td>477</td>
                           <td>558</td>
                           <td>990</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata468" class="form-control" readonly value="<?php echo $bidhistory['akata468'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata567" class="form-control" readonly value="<?php echo $bidhistory['akata567'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata116" class="form-control" readonly value="<?php echo $bidhistory['akata116'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata224" class="form-control" readonly value="<?php echo $bidhistory['akata224'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata233" class="form-control" readonly value="<?php echo $bidhistory['akata233'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata288" class="form-control" readonly value="<?php echo $bidhistory['akata288'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata440" class="form-control" readonly value="<?php echo $bidhistory['akata440'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata477" class="form-control" readonly value="<?php echo $bidhistory['akata477'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata558" class="form-control" readonly value="<?php echo $bidhistory['akata558'];?>"    min="10" /></td>
                           <td><input type="Number" name="akata990" class="form-control" readonly value="<?php echo $bidhistory['akata990'];?>"    min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>800</td>
                           <td>666</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata800" class="form-control" readonly   min="10" /></td>
                           <td><input type="Number" name="akata666" class="form-control" readonly   min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">9</td>
                        </tr>
                        <tr style="color: black">
                           <td>126</td>
                           <td>135</td>
                           <td>180</td>
                           <td>234</td>
                           <td>270</td>
                           <td>289</td>
                           <td>360</td>
                           <td>379</td>
                           <td>450</td>
                           <td>469</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata126" class="form-control" readonly value="<?php echo $bidhistory['akata126'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata135" class="form-control" readonly value="<?php echo $bidhistory['akata135'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata180" class="form-control" readonly value="<?php echo $bidhistory['akata180'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata234" class="form-control" readonly value="<?php echo $bidhistory['akata234'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata270" class="form-control" readonly value="<?php echo $bidhistory['akata270'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata289" class="form-control" readonly value="<?php echo $bidhistory['akata289'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata360" class="form-control" readonly value="<?php echo $bidhistory['akata360'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata379" class="form-control" readonly value="<?php echo $bidhistory['akata379'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata450" class="form-control" readonly value="<?php echo $bidhistory['akata450'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata469" class="form-control" readonly value="<?php echo $bidhistory['akata469'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>478</td>
                           <td>568</td>
                           <td>117</td>
                           <td>144</td>
                           <td>199</td>
                           <td>225</td>
                           <td>388</td>
                           <td>559</td>
                           <td>577</td>
                           <td>667</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata478" class="form-control" readonly value="<?php echo $bidhistory['akata478'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata568" class="form-control" readonly value="<?php echo $bidhistory['akata568'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata117" class="form-control" readonly value="<?php echo $bidhistory['akata117'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata144" class="form-control" readonly value="<?php echo $bidhistory['akata144'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata199" class="form-control" readonly value="<?php echo $bidhistory['akata199'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata225" class="form-control" readonly value="<?php echo $bidhistory['akata225'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata388" class="form-control" readonly value="<?php echo $bidhistory['akata388'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata559" class="form-control" readonly value="<?php echo $bidhistory['akata559'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata577" class="form-control" readonly value="<?php echo $bidhistory['akata577'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata667" class="form-control" readonly value="<?php echo $bidhistory['akata667'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>900</td>
                           <td>333</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata900" class="form-control" readonly  min="10" /></td>
                           <td><input type="Number" name="akata333" class="form-control" readonly  min="10" /></td>
                        </tr>
                        <tr>
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10" style="text-align: center;background-color:green; height: 30px; color: #FFF; font-size: 20px; font-weight: bold;">0</td>
                        </tr>
                        <tr style="color: black">
                           <td>127</td>
                           <td>136</td>
                           <td>145</td>
                           <td>190</td>
                           <td>235</td>
                           <td>280</td>
                           <td>370</td>
                           <td>389</td>
                           <td>460</td>
                           <td>479</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata127" class="form-control" readonly value="<?php echo $bidhistory['akata127'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata136" class="form-control" readonly value="<?php echo $bidhistory['akata136'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata145" class="form-control" readonly value="<?php echo $bidhistory['akata145'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata190" class="form-control" readonly value="<?php echo $bidhistory['akata190'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata235" class="form-control" readonly value="<?php echo $bidhistory['akata235'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata280" class="form-control" readonly value="<?php echo $bidhistory['akata280'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata370" class="form-control" readonly value="<?php echo $bidhistory['akata370'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata389" class="form-control" readonly value="<?php echo $bidhistory['akata389'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata460" class="form-control" readonly value="<?php echo $bidhistory['akata460'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata479" class="form-control" readonly value="<?php echo $bidhistory['akata479'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>569</td>
                           <td>578</td>
                           <td>118</td>
                           <td>226</td>
                           <td>244</td>
                           <td>299</td>
                           <td>334</td>
                           <td>488</td>
                           <td>668</td>
                           <td>677</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata569" class="form-control" readonly value="<?php echo $bidhistory['akata569'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata578" class="form-control" readonly value="<?php echo $bidhistory['akata578'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata118" class="form-control" readonly value="<?php echo $bidhistory['akata118'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata226" class="form-control" readonly value="<?php echo $bidhistory['akata226'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata244" class="form-control" readonly value="<?php echo $bidhistory['akata244'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata299" class="form-control" readonly value="<?php echo $bidhistory['akata299'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata334" class="form-control" readonly value="<?php echo $bidhistory['akata334'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata488" class="form-control" readonly value="<?php echo $bidhistory['akata488'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata668" class="form-control" readonly value="<?php echo $bidhistory['akata668'];?>"   min="10" /></td>
                           <td><input type="Number" name="akata677" class="form-control" readonly value="<?php echo $bidhistory['akata677'];?>"   min="10" /></td>
                        </tr>
                        <tr style="color: black">
                           <td>000</td>
                           <td>550</td>
                        </tr>
                        <tr>
                           <td><input type="Number" name="akata000" class="form-control" readonly  min="10" /></td>
                           <td><input type="Number" name="akata550" class="form-control" readonly  min="10" /></td>
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
           
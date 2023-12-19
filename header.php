
<?php 
session_start();
$tsoftId = $_SESSION['tsoftId'];

?>
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

  <link rel="stylesheet" href="css/mystyle.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
<link rel="stylesheet" href="css/mystyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}

.navbar {
width: 100%;
background-color: #377438;
overflow: auto;
}

.navbar a {
float: left;
padding: 0px;
color:#FFFFFF;
text-decoration: none;
font-size: 17px;

}

.navbar a:hover {
background-color: #04AA6D;
}

.active {
background-color: #04AA6D;
}

@media screen and (max-width: 500px) {
.navbar a {
float: none;
display: block;
}

}
</style>
</head>

<!-- Must Load First -->

<body class="hold-transition skin-green sidebar-mini">
<div >
<header>

<nav class="navbar navbar-expand-lg navbar-light bgheader" >
     <?php if(empty($tsoftId)) { ?>
  <a class="navbar-brand" href="index.php"><img src="assets\dist\img\logo.png"  width="150"></a>
  <?PHP } else { ?>
  <a class="navbar-brand" href="dashboard.php"><img src="assets\dist\img\logo.png"  width="150"></a>
  <?php } ?>
  
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
        <?php if(empty($tsoftId)) { ?>
      <li class="nav-item active">
        <a class="nav-link" href="index.php" style="font-size: 18px; color: #FFFFFF; padding-right: 18px;">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="about_us.php" style="font-size: 18px; color: #FFFFFF;padding-right:18px;">About Us</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="ichaapurti_morning_chart.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Ichaapurti Morning</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="prabhat_chart.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;"> Prabhat</a>
      </li>      <li class="nav-item">
        <a class="nav-link" href="ichaapurti_day_chart.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Ichaapurti Day</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="kalyan_chart.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Kalyan</a>
      </li>
    
       <li class="nav-item">
        <a class="nav-link" href="rajdhani_night_chart.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Rajdhani Night </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="ichaapurti_night_chart.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Ichaapurti Night</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="main_bazar_chart.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Main Bazar</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="login.php" style="font-size: 18px; color: #FFFFFF;padding-right:18px;">Login</a>
      </li>
     <?php } else { ?>
      <li class="nav-item">
        <a class="nav-link" href="wallet_balance.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;"> Wallet Balance</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="request_withdraw_funds.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;"> Request Withdraw Funds</a>
      </li>
     
       <li class="nav-item">
        <a class="nav-link" href="transfer_points.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;"> Transfer Points </a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="bid_history.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Bid History</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="jodi_win_history.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Win History</a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="bank_account.php" style="font-size: 16px; color: #FFFFFF;padding-right:10px;">Bank Account </a>
      </li>
      
      <li class="nav-item">
        <a class="nav-link" href="" style="font-size: 16px; color: #FFFFFF;padding-right:10px;"><?php echo ucwords($_SESSION['tsoftId']);?></a>
      </li>
       <li class="nav-item">
        <a class="nav-link" href="logout.php" style="font-size: 16px; color: #FFFFFF;padding-right:0px;">Logout</a>
      </li>
      <?php } ?>
    </ul>
  </div>
</nav>     </header>
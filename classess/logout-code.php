<?php 
session_start();
include("etsystem.php");
include "check_session.php";
$crud = new Etstysem();
 $superadmin = $_SESSION['etsoftId'];
  
date_default_timezone_set('Asia/Kolkata');
$currentTime = date( 'd-m-Y h:i:s A', time () );
$queryTime = "SELECT * FROM tbl_user_login_history where user_id='$superadmin' order by id DESC ";
$resultTime = $crud->getData($queryTime);
 foreach ($resultTime as $key => $row){
    $login_time = $row['login_time']; 
}
/*echo "UPDATE  tbl_user_login_history SET logout_time = '$currentTime'  WHERE user_id = '$superadmin' and login_time = '$login_time'";
die;*/
     $result = $crud->execute("UPDATE tbl_user_login_history SET logout_time = '$currentTime'  WHERE user_id = '$superadmin' and login_time = '$login_time'");
    
    session_destroy();
    header("location:../index.php");



?>
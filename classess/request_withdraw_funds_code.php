<?php
error_reporting(0);
include_once 'DbConfig.php';
include("etsystem.php");

$crud = new Etstysem();

if(isset($_POST['PointData'])) 
{ 
    $point = $crud->escape_string($_POST['point']);

    $customerId = $crud->escape_string($_POST['customerId']);
  
   $result = $crud->execute("INSERT INTO `tbl_fundrequests`(customerId,point  ,created_at ,updated_at ,currentStatus) 
   VALUES('$customerId' ,'$point' ,now() ,now() ,'Request')");
  //die();
    echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("../thank-you.php");</script>';


}

?> 



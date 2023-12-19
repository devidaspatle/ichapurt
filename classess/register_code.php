<?php
error_reporting(0);
include_once 'DbConfig.php';
include("etsystem.php");

$crud = new Etstysem();

if(isset($_POST['Submit'])) 
{ 
	$name = $crud->escape_string($_POST['name']);
	$mobile = $crud->escape_string($_POST['mobile']);
	$emailid = $crud->escape_string($_POST['email']);
	$password = $crud->escape_string($_POST['password']);
//echo "INSERT INTO `tbl_customer`(name,vmobile ,emailid ,password ,userid ,created_at ,currentStatus ,custpmerid) VALUES('$name' ,'$mobile' ,'$emailid' ,'$password' ,'$userid' ,now(),'Y', '$custpmerid')";


   $result = $crud->execute("INSERT INTO `tbl_customer`(name,mobile ,emailid ,password ,userid ,created_at ,currentStatus ,custpmerid) VALUES('$name' ,'$mobile' ,'$emailid' ,'$password' ,'$userid' ,now(),'Y', '$custpmerid')");
 // die();
    echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("../index.php");</script>';


}

?> 	name	mobile	emailid	password	created_at	currentStatus	custpmerid

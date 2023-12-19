<?php
// error_reporting(0);
date_default_timezone_set('Africa/Dar_es_salaam');
session_start();
include("etsystem.php");
$crud = new Etstysem();
//$validation = new Validation();
$email = $crud->escape_string($_POST['login']);    
$password =$crud->escape_string($_POST['password']);
//echo "SELECT * FROM  tbl_customer where email ='".$email."' and password ='".$password."'";

 $query = "SELECT * FROM  tbl_customer where custpmerid  ='".$email."' and password ='".$password."'";

$results = $crud->getData($query);
foreach ($results as $key => $row){
  
    $name = $row['name'];
    $custpmerid =$row['custpmerid'];
}

if(!empty($custpmerid))
{
  $_SESSION['tsoftId'] = $row['custpmerid'];

$_SESSION['name'] = $name;

header("location:../dashboard.php?msg=success");
}
else
{
header("location:../login.php?msg=error");	
}
?>
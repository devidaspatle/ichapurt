<?php
error_reporting(0);
include_once 'DbConfig.php';
include("etsystem.php");

$crud = new Etstysem();

if(isset($_POST['SingleData'])) 
{ 
	
    $category_name = $crud->escape_string($_POST['category_name']);
    $akata01 = $crud->escape_string($_POST['akata0']);
	$akata02 = $crud->escape_string($_POST['akata1']);
	$akata03 = $crud->escape_string($_POST['akata2']);
	$akata04 = $crud->escape_string($_POST['akata3']);
	$akata05 = $crud->escape_string($_POST['akata4']);
	$akata06 = $crud->escape_string($_POST['akata5']);
	$akata07 = $crud->escape_string($_POST['akata6']);
	$akata08 = $crud->escape_string($_POST['akata7']);
	$akata09 = $crud->escape_string($_POST['akata8']);
	$akata10 = $crud->escape_string($_POST['akata9']);
    $customerId = $crud->escape_string($_POST['customerId']);
    //echo "INSERT INTO `tbl_singleakata`(customerId,category_name,akata01 ,akata02 ,akata03 ,akata04 ,akata05 ,akata06 ,akata07 ,akata08 ,akata09 ,akata10, created_at) VALUES('$customerId', '$category_name', '$akata01' ,'$akata02' ,'$akata03' ,'$akata04' ,'$akata05' ,'$akata06' ,'$akata07' ,'$akata08' ,'$akata09' ,'$akata10',now())";
    //die;
   $result = $crud->execute("INSERT INTO `tbl_singleakata`(customerId,category_name,akata01 ,akata02 ,akata03 ,akata04 ,akata05 ,akata06 ,akata07 ,akata08 ,akata09 ,akata10, created_at) VALUES('$customerId', '$category_name', '$akata01' ,'$akata02' ,'$akata03' ,'$akata04' ,'$akata05' ,'$akata06' ,'$akata07' ,'$akata08' ,'$akata09' ,'$akata10',now())");
 // die();
    echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("../thank-you.php");</script>';


}

?> 



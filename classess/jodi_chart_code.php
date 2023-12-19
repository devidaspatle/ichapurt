<?php 
error_reporting(0);
include("etsystem.php");
/*ICHMOR9876
PRAB475842
ICHDAY4536
KALY213289
ICHEV34632
RAJNIG9877
ICHNIG8787*/

$crud = new Etstysem();
$query11 = "SELECT * FROM tbl_mattka_jodi_chart WHERE  currentStatus = 'Y'  order by id desc limit 1";
$results11 = $crud->getData($query11);
   foreach( $results11 as $key => $row11)
	{
	$status11 = $row11['currentStatus'];
	$chartday = $row11['chartday']; 
	$ichaapurti_morning = $row11['ichaapurti_morning']; 
	$prabhat = $row11['prabhat']; 
	$ichaapurti_day = $row11['ichaapurti_day'];
	$kalyan = $row11['kalyan']; 
	$ichaapurti_night = $row11['ichaapurti_night']; 
	$rajdhani_night = $row11['rajdhani_night']; 
	$status11 = $row11['currentStatus'];
	$main_bazar = $row11['main_bazar']; 
	$created_date = $row11['created_date']; 
  }
?>
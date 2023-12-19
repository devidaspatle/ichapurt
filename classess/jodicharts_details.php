<?php
error_reporting(0);
include_once 'DbConfig.php';
include("etsystem.php");

$crud = new Etstysem();

echo $segment = $request->segment(2);
die;
   $query11 = "SELECT * FROM tbl_jodi_chart WHERE  id ='$segment'";
    $results11 = $crud->getData($query11);
   foreach( $results11 as $key => $row11)
	{
	 $mattka_type = $row11['mattka_type'];
	 $mond = $row11['mond'];
	 $tuesd= $row11['tuesd'];
	 $wedn = $row11['wedn'];
	 $thusd= $row11['thusd'];
	 $frid = $row11['frid'];
	 $satus = $row11['satus'];
	 $mattaka_date = $row11['mattaka_date'];
	}
?>

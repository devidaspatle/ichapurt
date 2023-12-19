<?php
error_reporting(0);
include_once 'DbConfig.php';
include("etsystem.php");

$crud = new Etstysem();

if(isset($_POST['Submit'])) 
{ 

     $mattka_type = $crud->escape_string($_POST['mattka_type']);
	$day_name = $crud->escape_string($_POST['day_name']);
	 $mattaka_date = $crud->escape_string($_POST['mattaka_date']);
	 $jodi = $crud->escape_string($_POST['jodi']);
   $query11 = "SELECT * FROM tbl_jodi_chart WHERE  mattka_type ='$mattka_type'  and mattaka_date ='$mattaka_date'";
    $results11 = $crud->getData($query11);
   foreach( $results11 as $key => $row11)
	{
	 $mattaka_dates = $row11['mattaka_date'];
   }
  if(empty($mattaka_dates)){	    
  if($day_name == 'Monday'){
    $result = $crud->execute("INSERT INTO `tbl_jodi_chart`(mattka_type,mond ,tuesd ,wedn ,thusd ,frid ,satus ,mattaka_date , currentStatus) VALUES('$mattka_type' ,'$jodi' ,'$tuesd' ,'$wedn','$thusd' ,'$frid' ,'$satus','$mattaka_date','Y')");
  } else if($day_name == 'Tuesday'){
     $result = $crud->execute("INSERT INTO `tbl_jodi_chart`(mattka_type,mond ,tuesd ,wedn ,thusd ,frid ,satus ,mattaka_date , currentStatus) VALUES('$mattka_type' ,'$mond' ,'$jodi' ,'$wedn','$thusd' ,'$frid' ,'$satus','$mattaka_date','Y')");
  } else if($day_name == 'Wednesday'){
   
      $result = $crud->execute("INSERT INTO `tbl_jodi_chart`(mattka_type,mond ,tuesd ,wedn ,thusd ,frid ,satus ,mattaka_date , currentStatus) VALUES('$mattka_type' ,'$mond' ,'$tuesd' ,'$jodi','$thusd' ,'$frid' ,'$satus','$mattaka_date','Y')");
  } else if($day_name == 'Thuersday'){
      $result = $crud->execute("INSERT INTO `tbl_jodi_chart`(mattka_type,mond ,tuesd ,wedn ,thusd ,frid ,satus ,mattaka_date , currentStatus) VALUES('$mattka_type' ,'$mond' ,'$tuesd' ,'$wedn','$jodi' ,'$frid' ,'$satus','$mattaka_date','Y')");
  } else if($day_name == 'Friday'){
      echo	$day_name;
      die;
      $result = $crud->execute("INSERT INTO `tbl_jodi_chart`(mattka_type,mond ,tuesd ,wedn ,thusd ,frid ,satus ,mattaka_date , currentStatus) VALUES('$mattka_type' ,'$mond' ,'$tuesd' ,'$wedn','$thusd' ,'$jodi' ,'$satus','$mattaka_date','Y')");
  } else if($day_name == 'Saturday'){
      $result = $crud->execute("INSERT INTO `tbl_jodi_chart`(mattka_type,mond ,tuesd ,wedn ,thusd ,frid ,satus ,mattaka_date , currentStatus) VALUES('$mattka_type' ,'$mond' ,'$tuesd' ,'$wedn','$thusd' ,'$frid' ,'$jodi','$mattaka_date','Y')");
  } 

    echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("https://ichaapurti.com/paneladmin/jodicharts");</script>';
}  else {
     echo '<script type="text/javascript">alert("Already data submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("https://ichaapurti.com/paneladmin/jodicharts/create");</script>';
}
} 

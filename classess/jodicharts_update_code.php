<?php
error_reporting(0);
include_once 'DbConfig.php';
include("etsystem.php");

$crud = new Etstysem();

if(isset($_POST['Submit'])) 
{ 
	$jodi = $crud->escape_string($_POST['jodi']);
	$jodi = $crud->escape_string($_POST['jodi']);
   	$day_name = $crud->escape_string($_POST['$day_name']);
  if($day_name == 'Monday'){
      $result = $crud->execute("UPDATE tbl_jodi_chart SET mond = '$jodi' , updateed_date = now() WHERE id = $itemId");
  } else if($day_name == 'Tuesday'){
     $result = $crud->execute("UPDATE tbl_jodi_chart SET tuesd = '$jodi' , updateed_date = now() WHERE id = $itemId");
  } else if($day_name == 'Wednesday'){
     $result = $crud->execute("UPDATE tbl_jodi_chart SET wedn = '$jodi' , updateed_date = now() WHERE id = $itemId");
  } else if($day_name == 'Thuersday'){
      $result = $crud->execute("UPDATE tbl_jodi_chart SET thusd = '$jodi' , updateed_date = now() WHERE id = $itemId");
  } else if($day_name == 'Friday'){
      $result = $crud->execute("UPDATE tbl_jodi_chart SET frid = '$jodi' , updateed_date = now() WHERE id = $itemId");
  } else if($day_name == 'Saturday'){
      $result = $crud->execute("UPDATE tbl_jodi_chart SET 	satus = '$jodi' , updateed_date = now() WHERE id = $itemId");
  } 

    echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("https://ichaapurti.com/paneladmin/jodicharts");</script>';
}  else {
     echo '<script type="text/javascript">alert("Already data submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("https://ichaapurti.com/paneladmin/jodicharts/create");</script>';
} 

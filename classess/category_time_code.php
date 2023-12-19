<?php 
error_reporting(0);

$ctquery11 = "SELECT * FROM category WHERE  catNumber ='ICHMOR9876' and currentStatus = 'Y'";
$ctresults11 = $crud->getData($ctquery11);
   foreach( $ctresults11 as $key => $row11)
	{
	$opentime11 = $row11['catTime'];
	$catoutTime11 = $row11['catoutTime']; 
	$inopentime11 = $row11['inopentime'];
	$inclosetime11 = $row11['inclosetime']; 
    }

$ctquery12 = "SELECT * FROM category WHERE  catNumber ='PRAB475842' and currentStatus = 'Y'";
$ctresults12 = $crud->getData($ctquery12);
foreach( $ctresults12 as $key => $row12)
	{
	$opentime12 = $row12['catTime'];
	$catoutTime12 = $row12['catoutTime'];
	$inopentime12 = $row12['inopentime'];
	$inclosetime12 = $row12['inclosetime']; 
    }
 $ctquery13 = "SELECT * FROM category WHERE  catNumber ='ICHDAY4536' and currentStatus = 'Y'";
$ctresults13 = $crud->getData($ctquery13);
foreach( $ctresults13 as $key => $row13)
	{
	$opentime13 = $row13['catTime'];
	$catoutTime13 = $row13['catoutTime']; 
	$inopentime13 = $row13['inopentime'];
	$inclosetime13 = $row13['inclosetime']; 
    }

 $ctquery14 = "SELECT * FROM category WHERE  catNumber ='KALY213289' and currentStatus = 'Y'";
$ctresults14 = $crud->getData($ctquery14);
foreach( $ctresults14 as $key => $row14)
	{
	$opentime14 = $row14['catTime'];
	$catoutTime14 = $row14['catoutTime']; 
	$inopentime14 = $row14['inopentime'];
	$inclosetime14 = $row14['inclosetime']; 
   }

 $ctquery15 = "SELECT * FROM category WHERE  catNumber ='ICHEV34632' and currentStatus = 'Y'";
$ctresults15 = $crud->getData($ctquery15);
foreach( $ctresults15 as $key => $row15)
	{
	$opentime15 = $row15['catTime'];
	$catoutTime15 = $row15['catoutTime']; 
	$inopentime15 = $row15['inopentime'];
	$inclosetime15 = $row15['inclosetime']; 
    }

$ctquery16 = "SELECT * FROM category WHERE  catNumber ='RAJNIG9877' and currentStatus = 'Y'";
$ctresults16 = $crud->getData($ctquery16);
foreach( $ctresults16 as $key => $row16)
	{
	$opentime16 = $row16['catTime'];
	$catoutTime16 = $row16['catoutTime']; 
	$inopentime16 = $row16['inopentime'];
	$inclosetime16 = $row16['inclosetime']; 
    }

 $ctquery17 = "SELECT * FROM category WHERE  catNumber ='ICHNIG8787' and currentStatus = 'Y'";
$ctresults17 = $crud->getData($ctquery17);
foreach( $ctresults17 as $key => $row17)
	{
	$opentime17 = $row17['catTime'];
	$catoutTime17 = $row17['catoutTime']; 
	$inopentime17 = $row17['inopentime'];
	$inclosetime17 = $row17['inclosetime']; 
    }
?>
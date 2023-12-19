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

$new_time = date("Y-m-d H:i:s", strtotime('+3 hours', strtotime($now)));


$crud = new Etstysem();
$query11 = "SELECT * FROM tab_results WHERE  category_name ='ICHMOR9876'  and mattaka_time ='0' and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y'  order by id desc limit 1";
$results11 = $crud->getData($query11);
   foreach( $results11 as $key => $row11)
	{
	$status11 = $row11['currentStatus'];
	$jodi11 = $row11['jodi']; 
	$double_pati11 = $row11['double_pati']; 
	$single_akata11 = $row11['single_akata']; 
	$single_akata11 = $row11['single_akata']; 
	 $created_at11 = $row11['created_at']; 
    $created_atim =  date("Y/m/d", strtotime('+10 hours', strtotime($created_at11)));
    }

 $queryClose11 = "SELECT * FROM tab_results WHERE  category_name ='ICHMOR9876' and mattaka_time ='1' and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$resultsClose11 = $crud->getData($queryClose11);
   foreach( $resultsClose11 as $key => $rowClose11)
	{
		$jodicls11 = $rowClose11['jodi'];     
    	$double_paticls11 = $rowClose11['double_pati']; 
    	$single_akatacls11 = $rowClose11['single_akata']; 
    }


 $query12 = "SELECT * FROM tab_results WHERE  category_name ='PRAB475842' and mattaka_time ='0'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$results12 = $crud->getData($query12);
foreach( $results12 as $key => $row12)
	{
	 $status12 = $row12['currentStatus'];
	$mattaka_number12 = $row12['mattaka_number'];  
	$jodi12 = $row12['jodi']; 
	$double_pati12 = $row12['double_pati']; 
	$single_akata12 = $row12['single_akata']; 
	$created_at = $row12['created_at']; 
    $created_at12 =  date("Y/m/d", strtotime('+10 hours', strtotime($created_at)));
    }
    
$queryClose12 = "SELECT * FROM tab_results WHERE  category_name ='PRAB475842' and mattaka_time ='1'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$resultsClose12 = $crud->getData($queryClose12);
   foreach( $resultsClose12 as $key => $rowClose12)
	{
		$jodicls12 = $rowClose12['jodi'];     
    	$double_paticls12 = $rowClose12['double_pati']; 
    	$single_akatacls12 = $rowClose12['single_akata']; 
    }

 $query13 = "SELECT * FROM tab_results WHERE  category_name ='ICHDAY4536' and mattaka_time ='0'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$results13 = $crud->getData($query13);
foreach( $results13 as $key => $row13)
	{
	$status13 = $row13['currentStatus'];
	$mattaka_number13 = $row13['mattaka_number']; 
	$jodi13 = $row13['jodi']; 
	$double_pati13 = $row13['double_pati']; 
	$single_akata13 = $row13['single_akata'];
    $created_at = $row13['created_at']; 
    $created_at13 =  date("Y/m/d", strtotime('+10 hours', strtotime($created_at)));
    }

$queryClose13 = "SELECT * FROM tab_results WHERE  category_name ='ICHDAY4536' and mattaka_time ='1'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$resultsClose13 = $crud->getData($queryClose13);
   foreach( $resultsClose13 as $key => $rowClose13)
	{
		$jodicls13 = $rowClose13['jodi'];     
    	$double_paticls13 = $rowClose13['double_pati']; 
    	$single_akatacls13 = $rowClose13['single_akata']; 
    }
    
 $query14 = "SELECT * FROM tab_results WHERE  category_name ='KALY213289'  and mattaka_time ='0'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$results14 = $crud->getData($query14);
foreach( $results14 as $key => $row14)
	{
	$status14 = $row14['currentStatus'];
	$mattaka_number14 = $row14['mattaka_number'];  
	$jodi14 = $row14['jodi']; 
	$double_pati14 = $row14['double_pati']; 
	$single_akata14 = $row14['single_akata'];
	$created_at = $row14['created_at'];
	$created_at14 =  date("Y/m/d", strtotime('+10 hours', strtotime($created_at)));
   }

$queryClose14 = "SELECT * FROM tab_results WHERE  category_name ='KALY213289' and mattaka_time ='1' and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$resultsClose14 = $crud->getData($queryClose14);
   foreach( $resultsClose14 as $key => $rowClose14)
	{
		$jodicls14 = $rowClose14['jodi'];     
    	$double_paticls14 = $rowClose14['double_pati']; 
    	$single_akatacls14 = $rowClose14['single_akata']; 
    }
    
 $query15 = "SELECT * FROM tab_results WHERE  category_name ='ICHEV34632' and mattaka_time ='0'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$results15 = $crud->getData($query15);
foreach( $results15 as $key => $row15)
	{
	$status15 = $row15['currentStatus'];
	$mattaka_number15 = $row15['mattaka_number']; 
	$double_pati15 = $row15['double_pati']; 
	$single_akata15 = $row15['single_akata'];
	$created_at = $row15['created_at'];
	$created_at15 =  date("Y/m/d", strtotime('+10 hours', strtotime($created_at)));
    }

$queryClose15 = "SELECT * FROM tab_results WHERE  category_name ='ICHEV34632' and mattaka_time ='1'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$resultsClose15 = $crud->getData($queryClose15);
   foreach( $resultsClose15 as $key => $rowClose15)
	{
		$jodicls15 = $rowClose15['jodi'];     
    	$double_paticls15 = $rowClose15['double_pati']; 
    	$single_akatacls15 = $rowClose15['single_akata']; 
    }
    
$query16 = "SELECT * FROM tab_results WHERE  category_name ='RAJNIG9877' and mattaka_time ='0'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$results16 = $crud->getData($query16);
foreach( $results16 as $key => $row16)
	{
	$status16 = $row16['currentStatus'];
	$mattaka_number16 = $row16['mattaka_number']; 
    $double_pati16 = $row16['double_pati']; 
	$single_akata16 = $row16['single_akata'];
	$created_at = $row12['created_at'];
	$created_at16 =  date("Y/m/d", strtotime('+10 hours', strtotime($created_at)));
    }
    

$queryClose16 = "SELECT * FROM tab_results WHERE  category_name ='RAJNIG9877' and mattaka_time ='1'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$resultsClose16 = $crud->getData($queryClose16);
   foreach( $resultsClose16 as $key => $rowClose16)
	{
		$jodicls16 = $rowClose16['jodi'];     
    	$double_paticls16 = $rowClose16['double_pati']; 
    	$single_akatacls16 = $rowClose16['single_akata']; 
    }
    
 $query17 = "SELECT * FROM tab_results WHERE  category_name ='ICHNIG8787' and mattaka_time ='0'  and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc limit 1";
$results17 = $crud->getData($query17);
foreach( $results17 as $key => $row17)
	{
	$status17 = $row17['currentStatus'];
	$mattaka_number17 = $row17['mattaka_number'];  
	$double_pati17 = $row17['double_pati']; 
	$single_akata17 = $row17['single_akata'];
	$created_at = $row12['created_at'];
	$created_at17 =  date("Y/m/d", strtotime('+10 hours', strtotime($created_at)));
    }

$queryClose17 = "SELECT * FROM tab_results WHERE  category_name ='ICHNIG8787' and mattaka_time ='1'   and DATE_FORMAT(created_at,'%Y-%m-%d') = CURDATE() and currentStatus = 'Y' order by id desc  limit 1";
$resultsClose17 = $crud->getData($queryClose17);
   foreach( $resultsClose17 as $key => $rowClose17)
	{
		$jodicls17 = $rowClose17['jodi'];     
    	$double_paticls17 = $rowClose17['double_pati']; 
    	$single_akatacls17 = $rowClose17['single_akata']; 
    }
    
?>
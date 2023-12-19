<?php
error_reporting(0);
include_once 'DbConfig.php';
include("etsystem.php");

$crud = new Etstysem();

if(isset($_POST['SingleData'])) 
{ 
    $category_name = $crud->escape_string($_POST['category_name']);
    $akata01 = $crud->escape_string($_POST['akata01']);
	$akata02 = $crud->escape_string($_POST['akata02']);
	$akata03 = $crud->escape_string($_POST['akata03']);
	$akata04 = $crud->escape_string($_POST['akata04']);
	$akata05 = $crud->escape_string($_POST['akata05']);
	$akata06 = $crud->escape_string($_POST['akata06']);
	$akata07 = $crud->escape_string($_POST['akata07']);
	$akata08 = $crud->escape_string($_POST['akata08']);
	$akata09 = $crud->escape_string($_POST['akata09']);
	$akata10 = $crud->escape_string($_POST['akata10']);
	$akata11 = $crud->escape_string($_POST['akata11']);
	$akata12 = $crud->escape_string($_POST['akata12']);
	$akata13 = $crud->escape_string($_POST['akata13']);
	$akata14 = $crud->escape_string($_POST['akata14']);
	$akata15 = $crud->escape_string($_POST['akata15']);
	$akata16 = $crud->escape_string($_POST['akata16']);
	$akata17 = $crud->escape_string($_POST['akata17']);
	$akata18 = $crud->escape_string($_POST['akata18']);
	$akata19 = $crud->escape_string($_POST['akata19']);
	$akata20 = $crud->escape_string($_POST['akata20']);
	$akata21 = $crud->escape_string($_POST['akata21']);
	$akata22 = $crud->escape_string($_POST['akata22']);
	$akata23 = $crud->escape_string($_POST['akata23']);
	$akata24 = $crud->escape_string($_POST['akata24']);
	$akata25 = $crud->escape_string($_POST['akata25']);
	$akata26 = $crud->escape_string($_POST['akata26']);
	$akata27 = $crud->escape_string($_POST['akata27']);
	$akata28 = $crud->escape_string($_POST['akata28']);
	$akata29 = $crud->escape_string($_POST['akata29']);
	$akata30 = $crud->escape_string($_POST['akata30']);
	$akata31 = $crud->escape_string($_POST['akata31']);
	$akata32 = $crud->escape_string($_POST['akata32']);
	$akata33 = $crud->escape_string($_POST['akata33']);
	$akata34 = $crud->escape_string($_POST['akata34']);
	$akata35 = $crud->escape_string($_POST['akata35']);
	$akata36 = $crud->escape_string($_POST['akata36']);
	$akata37 = $crud->escape_string($_POST['akata37']);
	$akata38 = $crud->escape_string($_POST['akata38']);
	$akata39 = $crud->escape_string($_POST['akata39']);
	$akata40 = $crud->escape_string($_POST['akata40']);
	$akata41 = $crud->escape_string($_POST['akata41']);
	$akata42 = $crud->escape_string($_POST['akata42']);
	$akata43 = $crud->escape_string($_POST['akata43']);
	$akata44 = $crud->escape_string($_POST['akata44']);
	$akata45 = $crud->escape_string($_POST['akata45']);
	$akata46 = $crud->escape_string($_POST['akata46']);
	$akata47 = $crud->escape_string($_POST['akata47']);
	$akata48 = $crud->escape_string($_POST['akata48']);
	$akata49 = $crud->escape_string($_POST['akata49']);
	$akata50 = $crud->escape_string($_POST['akata50']);
	$akata51 = $crud->escape_string($_POST['akata51']);
	$akata52 = $crud->escape_string($_POST['akata52']);
	$akata53 = $crud->escape_string($_POST['akata53']);
	$akata54 = $crud->escape_string($_POST['akata54']);
	$akata55 = $crud->escape_string($_POST['akata55']);
	$akata56 = $crud->escape_string($_POST['akata56']);
	$akata57 = $crud->escape_string($_POST['akata57']);
	$akata58 = $crud->escape_string($_POST['akata58']);
	$akata59 = $crud->escape_string($_POST['akata59']);
	$akata60 = $crud->escape_string($_POST['akata60']);
	$akata61 = $crud->escape_string($_POST['akata61']);
	$akata62 = $crud->escape_string($_POST['akata62']);
	$akata63 = $crud->escape_string($_POST['akata63']);
	$akata64 = $crud->escape_string($_POST['akata64']);
	$akata65 = $crud->escape_string($_POST['akata65']);
	$akata66 = $crud->escape_string($_POST['akata66']);
	$akata67 = $crud->escape_string($_POST['akata67']);
	$akata68 = $crud->escape_string($_POST['akata68']);
	$akata69 = $crud->escape_string($_POST['akata69']);
	$akata70 = $crud->escape_string($_POST['akata70']);
	$akata71 = $crud->escape_string($_POST['akata71']);
	$akata72 = $crud->escape_string($_POST['akata72']);
	$akata73 = $crud->escape_string($_POST['akata73']);
	$akata74 = $crud->escape_string($_POST['akata74']);
	$akata75 = $crud->escape_string($_POST['akata75']);
	$akata76 = $crud->escape_string($_POST['akata76']);
	$akata77 = $crud->escape_string($_POST['akata77']);
	$akata78 = $crud->escape_string($_POST['akata78']);
	$akata79 = $crud->escape_string($_POST['akata79']);
	$akata80 = $crud->escape_string($_POST['akata80']);
	$akata81 = $crud->escape_string($_POST['akata81']);
	$akata82 = $crud->escape_string($_POST['akata82']);
	$akata83 = $crud->escape_string($_POST['akata83']);
	$akata84 = $crud->escape_string($_POST['akata84']);
	$akata85 = $crud->escape_string($_POST['akata85']);
	$akata86 = $crud->escape_string($_POST['akata86']);
	$akata87 = $crud->escape_string($_POST['akata87']);
	$akata88 = $crud->escape_string($_POST['akata88']);
	$akata89 = $crud->escape_string($_POST['akata89']);
	$akata90 = $crud->escape_string($_POST['akata90']);
	$akata91 = $crud->escape_string($_POST['akata91']);
	$akata92 = $crud->escape_string($_POST['akata92']);
	$akata93 = $crud->escape_string($_POST['akata93']);
	$akata94 = $crud->escape_string($_POST['akata94']);
	$akata95 = $crud->escape_string($_POST['akata95']);
	$akata96 = $crud->escape_string($_POST['akata96']);
	$akata97 = $crud->escape_string($_POST['akata97']);
	$akata98 = $crud->escape_string($_POST['akata98']);
	$akata99 = $crud->escape_string($_POST['akata99']);
	$akata100 = $crud->escape_string($_POST['akata100']);
    $customerId = $crud->escape_string($_POST['customerId']);
  
    
   $result = $crud->execute("INSERT INTO `tbl_jodis`(customerId,category_name,akata01 ,akata02 ,akata03 ,akata04 ,akata05 ,akata06 ,akata07 ,akata08 ,akata09 ,akata10 ,akata11 ,akata12 ,akata13 ,akata14 ,akata15 ,akata16 ,akata17 ,akata18 ,akata19 ,akata20 ,akata21 ,akata22 ,akata23 ,akata24 ,akata25 ,akata26 ,akata27 ,akata28 ,akata29 ,akata30 ,akata31 ,akata32 ,akata33 ,akata34 ,akata35 ,akata36 ,akata37 ,akata38 ,akata39 ,akata40 ,akata41 ,akata42 ,akata43 ,akata44 ,akata45 ,akata46 ,akata47 ,akata48 ,akata49 ,akata50 ,akata51 ,akata52 ,akata53 ,akata54 ,akata55 ,akata56 ,akata57 ,akata58 ,akata59 ,akata60 ,akata61 ,akata62 ,akata63 ,akata64 ,akata65 ,akata66 ,akata67 ,akata68 ,akata69 ,akata70 ,akata71 ,akata72 ,akata73 ,akata74 ,akata75 ,akata76 ,akata77 ,akata78 ,akata79 ,akata80 ,akata81 ,akata82 ,akata83 ,akata84 ,akata85 ,akata86 ,akata87 ,akata88 ,akata89 ,akata90 ,akata91 ,akata92 ,akata93 ,akata94 ,akata95 ,akata96 ,akata97 ,akata98 ,akata99 ,akata100, created_date) VALUES('$customerId','$category_name' ,'$akata01' ,'$akata02' ,'$akata03' ,'$akata04' ,'$akata05' ,'$akata06' ,'$akata07' ,'$akata08' ,'$akata09' ,'$akata10' ,'$akata11' ,'$akata12' ,'$akata13' ,'$akata14' ,'$akata15' ,'$akata16' ,'$akata17' ,'$akata18' ,'$akata19' ,'$akata20' ,'$akata21' ,'$akata22' ,'$akata23' ,'$akata24' ,'$akata25' ,'$akata26' ,'$akata27' ,'$akata28' ,'$akata29' ,'$akata30' ,'$akata31' ,'$akata32' ,'$akata33' ,'$akata34' ,'$akata35' ,'$akata36' ,'$akata37' ,'$akata38' ,'$akata39' ,'$akata40' ,'$akata41' ,'$akata42' ,'$akata43' ,'$akata44' ,'$akata45' ,'$akata46' ,'$akata47' ,'$akata48' ,'$akata49' ,'$akata50' ,'$akata51' ,'$akata52' ,'$akata53' ,'$akata54' ,'$akata55' ,'$akata56' ,'$akata57' ,'$akata58' ,'$akata59' ,'$akata60' ,'$akata61' ,'$akata62' ,'$akata63' ,'$akata64' ,'$akata65' ,'$akata66' ,'$akata67' ,'$akata68' ,'$akata69' ,'$akata70' ,'$akata71' ,'$akata72' ,'$akata73' ,'$akata74' ,'$akata75' ,'$akata76' ,'$akata77' ,'$akata78' ,'$akata79' ,'$akata80' ,'$akata81' ,'$akata82' ,'$akata83' ,'$akata84' ,'$akata85' ,'$akata86' ,'$akata87' ,'$akata88' ,'$akata89' ,'$akata90' ,'$akata91' ,'$akata92' ,'$akata93' ,'$akata94' ,'$akata95' ,'$akata96' ,'$akata97' ,'$akata98' ,'$akata99' ,'$akata100',now())");
 // die();
    echo '<script type="text/javascript">alert("You  have been sucessfully submitted...!");</script>';
    echo '<script type="text/javascript">window.location.assign("../thank-you.php");</script>';


}

?> 



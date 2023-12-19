<?php 
$category_name = $_GET[''];
$jodi_date = $_GET[''];
// Database configuration 
$dbHost     = "localhost"; 
$dbUsername = "ichaapu1_ayub"; 
$dbPassword = "u?),0%?-p[8L"; 
$dbName     = "ichaapu1_ayub"; 
 
// Create database connection 
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName); 
 
// Check connection 
if ($db->connect_error) { 
    die("Connection failed: " . $db->connect_error); 
}
 
// Filter the excel data 
function filterData(&$str){ 
    $str = preg_replace("/\t/", "\\t", $str); 
    $str = preg_replace("/\r?\n/", "\\n", $str); 
    if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"'; 
} 
 
// Excel file name for download 
$fileName = "members-jodi_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('CustomerId','Category_name','Akata01','Akata02','Akata03','Akata04','Akata05','Akata06','Akata07','Akata08','Akata09','Akata10','Akata11','Akata12','Akata13','Akata14','Akata15','Akata16','Akata17','Akata18','Akata19','Akata20','Akata21','Akata22','Akata23','Akata24','Akata25','Akata26','Akata27','Akata28','Akata29','Akata30','Akata31','Akata32','Akata33','Akata34','Akata35','Akata36','Akata37','Akata38','Akata39','Akata40','Akata41','Akata42','Akata43','Akata44','Akata45','Akata46','Akata47','Akata48','Akata49','Akata50','Akata51','Akata52','Akata53','Akata54','Akata55','Akata56','Akata57','Akata58','Akata59','Akata60','Akata61','Akata62','Akata63','Akata64','Akata65','Akata66','Akata67','Akata68','Akata69','Akata70','Akata71','Akata72','Akata73','Akata74','Akata75','Akata76','Akata77','Akata78','Akata79','Akata80','Akata81','Akata82','Akata83','Akata84','Akata85','Akata86','Akata87','Akata88','Akata89','Akata90','Akata91','Akata92','Akata93','Akata94','Akata95','Akata96','Akata97','Akata98','Akata99','Akata100','Areated_date'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM tbl_patti where  category_name = '$category_name' and created_date='$jodi_date'"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
       
        $lineData = array($row['customerId'], $row['category_name'], $row['akata01'], $row['akata02'], $row['akata03'], $row['akata04'],$row['akata05'], $row['akata06'], $row['akata07'], $row['akata08'], $row['akata09'], $row['akata10'], $row['akata11'],$row['akata12'], $row['akata13'], $row['akata14'], $row['akata15'], $row['akata16'], $row['akata17'], $row['akata18'],$row['akata19'], $row['akata20'], $row['akata21'], $row['akata22'], $row['akata23'], $row['akata24'], $row['akata25'],$row['akata26'], $row['akata27'], $row['akata28'], $row['akata29'], $row['akata30'], $row['akata31'], $row['akata32'],$row['akata33'], $row['akata34'], $row['akata35'], $row['akata36'], $row['akata37'], $row['akata38'], $row['akata39'],$row['akata40'], $row['akata41'], $row['akata42'], $row['akata43'], $row['akata44'], $row['akata45'], $row['akata46'],$row['akata47'], $row['akata48'], $row['akata49'], $row['akata50'], $row['akata51'], $row['akata52'], $row['akata53'],$row['akata54'], $row['akata55'], $row['akata56'], $row['akata57'], $row['akata58'], $row['akata59'], $row['akata60'],$row['akata61'], $row['akata62'], $row['akata63'], $row['akata64'], $row['akata65'], $row['akata66'], $row['akata67'],$row['akata68'], $row['akata69'], $row['akata70'], $row['email'], $row['gender'], $row['country'], $row['akata71'],$row['akata72'], $row['akata73'], $row['akata74'], $row['akata75'], $row['akata76'], $row['akata77'], $row['akata78'],$row['akata79'], $row['akata80'], $row['akata81'], $row['akata82'], $row['akata83'], $row['akata84'], $row['akata85'],$row['akata86'], $row['akata87'], $row['akata88'], $row['akata89'], $row['akata90'], $row['akata91'], $row['akata92'],$row['akata93'], $row['akata94'], $row['akata95'], $row['akata96'], $row['akata97'], $row['akata98'], $row['akata99'],$row['akata100'], $row['created_date']); 
        array_walk($lineData, 'filterData'); 
        $excelData .= implode("\t", array_values($lineData)) . "\n"; 
    } 
}else{ 
    $excelData .= 'No records found...'. "\n"; 
} 
 
// Headers for download 
header("Content-Type: application/vnd.ms-excel"); 
header("Content-Disposition: attachment; filename=\"$fileName\""); 
 
// Render excel data 
echo $excelData; 
 
exit;


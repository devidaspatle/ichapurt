<?php 
$category_name = $_GET[''];
$single_date = $_GET[''];
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
$fileName = "members-single_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('CustomerId','Category_name','Akata01','Akata02','Akata03','Akata04','Akata05','Akata06','Akata07','Akata08','Akata09','Akata10','created_date'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM tbl_singleakata where  category_name = '$category_name' and created_date='$single_date'"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
       
        $lineData = array($row['customerId'], $row['category_name'], $row['akata01'], $row['akata02'], $row['akata03'], $row['akata04'],$row['akata05'], $row['akata06'], $row['akata07'], $row['akata08'], $row['akata09'], $row['akata10'], $row['created_date']); 
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


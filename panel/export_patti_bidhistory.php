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
$fileName = "members-patti_" . date('Y-m-d') . ".xls"; 
 
// Column names 
$fields = array('CustomerId','Category_name','Akata230','Akata267','Akata348','Akata357','Akata456','Akata140','akata137','akata128','akata146','akata236','akata245','akata290','akata380','akata470','akata489','akata560','akata678','akata579','akata119','akata155','akata227','akata335','akata344','akata399','akata588','akata669','akata777','akata100','akata129','akata138','akata147','akata156','akata237','akata246','akata345','akata390','akata480','akata570','akata589','akata679','akata110','akata228','akata255','akata336','akata499','Akata660','Akata688','Akata778','Akata200','Akata444','Akata120','Akata139','Akata148','Akata157','Akata238','Akata247','Akata256','Akata346','Akata490','Akata580','Akata670','Akata689','Akata166','Akata229','Akata337','Akata355','Akata445','Akata599','Akata779','Akata788','Akata300','Akata111','Akata130','Akata149','Akata158','Akata167','Akata239','Akata248','Akata257','Akata347','Akata356','Akata590','Akata680','akata112','akata220','akata266','akata338','akata446','akata455','akata699','Akata789','akata770','akata400','akata888','akata159','akata168','akata249','akata258','akata690','akata780','akata113','akata122','akata177','akata339','akata366','akata447','akata799','akata889','akata500','akata555','akata123','akata150','akata169','akata178','akata240','akata259','akata268','akata349','akata358','akata367','akata457','akata790','akata114','akata277','akata330','akata448','akata466','akata556','akata880','akata899','akata600','akata222','akata124','akata160','akata179','akata250','akata269','akata278','akata340','akata359','akata368','akata458','akata467','akata890','akata115','akata133','akata188','akata223','akata377','akata449','akata557','akata566','akata700','akata999','akata125','akata134','akata170','akata189','akata260','akata279','akata350','akata369','akata378','akata459','akata468','akata567','akata116','akata224','akata233','akata288','akata440','akata477','akata558','akata990','akata800','akata666','akata126','akata135','akata180','akata234','akata270','akata289','akata360','akata379','Akata789','akata450','akata469','akata478','akata568','akata117','akata144','akata199','akata225','akata388','akata559','akata577','akata667','akata900','akata333','akata127','akata136','akata145','akata190','akata235','akata280','akata370','akata389','akata460','akata479','akata569','akata578','akata118','akata226','akata244','Akata789','akata299','akata334','akata488','akata668','akata677','akata000','akata550','Created_date'); 
 
// Display column names as first row 
$excelData = implode("\t", array_values($fields)) . "\n"; 
 
// Fetch records from database 
$query = $db->query("SELECT * FROM tbl_patti where  category_name = '$category_name' and created_date='$jodi_date'"); 
if($query->num_rows > 0){ 
    // Output each row of the data 
    while($row = $query->fetch_assoc()){ 
       
        $lineData = array($row['customerId'], $row['category_name'], $row['akata230'], $row['akata267'], $row['akata348'], $row['akata357'],$row['akata456'], $row['akata140'], $row['akata137'], $row['akata128'], $row['akata146'], $row['akata236'], $row['akata245'],$row['akata290'], $row['akata380'], $row['akata470'], $row['akata489'], $row['akata560'], $row['akata678'], $row['akata579'],$row['akata119'], $row['akata155'], $row['akata227'], $row['akata335'], $row['akata344'], $row['akata399'], $row['akata588'],$row['akata669'], $row['akata777'], $row['akata100'], $row['akata129'], $row['akata138'], $row['akata147'], $row['akata156'],$row['akata237'], $row['akata246'], $row['akata345'], $row['akata390'], $row['akata480'], $row['akata570'], $row['akata589'],$row['akata679'], $row['akata110'], $row['akata228'], $row['akata255'], $row['akata336'], $row['akata499'], $row['akata660'],$row['akata688'], $row['akata778'], $row['akata200'], $row['akata444'], $row['akata120'], $row['akata139'], $row['akata148'],$row['akata157'], $row['akata238'], $row['akata247'], $row['akata256'], $row['akata346'], $row['akata490'], $row['akata580'],$row['akata670'], $row['akata689'], $row['akata166'], $row['akata229'], $row['akata337'], $row['akata355'], $row['akata445'],$row['akata599'], $row['akata779'], $row['akata788'], $row['akata300'], $row['akata111'], $row['akata130'], $row['akata149'],$row['akata158'], $row['akata167'], $row['akata239'], $row['akata248'], $row['akata257'], $row['akata347'], $row['akata356'],$row['akata590'], $row['akata680'], $row['akata789'], $row['akata112'], $row['akata220'], $row['akata266'], $row['akata338'],$row['akata446'], $row['akata455'], $row['akata699'], $row['akata770'], $row['akata400'], $row['akata888'], $row['akata159'],$row['akata168'], $row['akata249'], $row['akata258'], $row['akata690'], $row['akata780'], $row['akata113'],  $row['akata122'], $row['akata177'], $row['akata339'], $row['akata366'],$row['akata447'], $row['akata799'], $row['akata889'], $row['akata500'], $row['akata555'], $row['akata123'], $row['akata150'],$row['akata169'], $row['akata178'], $row['akata240'], $row['akata259'], $row['akata268'], $row['akata349'],  $row['akata358'], $row['akata367'], $row['akata457'], $row['akata790'],$row['akata114'], $row['akata277'], $row['akata330'], $row['akata448'], $row['akata466'], $row['akata556'], $row['akata880'],$row['akata899'], $row['akata600'], $row['akata222'], $row['akata124'], $row['akata160'], $row['akata179'],  $row['akata250'], $row['akata269'], $row['akata278'], $row['akata340'],$row['akata359'], $row['akata368'], $row['akata458'], $row['akata467'], $row['akata890'], $row['akata115'], $row['akata133'],$row['akata188'], $row['akata223'], $row['akata377'], $row['akata449'], $row['akata557'], $row['akata566'],  $row['akata700'], $row['akata999'], $row['akata125'], $row['akata134'],$row['akata170'], $row['akata189'], $row['akata260'], $row['akata279'], $row['akata350'], $row['akata369'], $row['akata378'],$row['akata459'], $row['akata468'], $row['akata567'], $row['akata116'], $row['akata224'], $row['akata233'],  $row['akata288'], $row['akata440'], $row['akata477'], $row['akata558'],$row['akata990'], $row['akata800'], $row['akata666'], $row['akata126'], $row['akata135'], $row['akata180'], $row['akata234'],$row['akata270'], $row['akata289'], $row['akata360'], $row['akata379'], $row['akata450'], $row['akata469'], $row['akata478'],$row['akata568'], $row['akata117'], $row['akata144'],$row['akata199'], $row['akata225'], $row['akata388'],$row['akata559'], $row['akata577'], $row['akata667'],$row['akata900'], $row['akata333'], $row['akata127'],$row['akata136'], $row['akata145'], $row['akata190'],$row['akata235'], $row['akata280'], $row['akata370'],$row['akata389'], $row['akata460'], $row['akata479'],$row['akata569'], $row['akata578'], $row['akata118'],$row['akata226'], $row['akata244'], $row['akata299'],$row['akata334'], $row['akata488'], $row['akata668'],$row['akata677'], $row['akata000'], $row['akata550'],$row['created_date']); 
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
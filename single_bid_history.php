<?php 
error_reporting(0);
session_start();
include "classess/check_session.php";
include("classess/etsystem.php");
$crud = new Etstysem();
$bidid =  $_GET['bidid'];
$catid = $_GET['catid'];
$date = $_GET['date'];
include "header.php";
//and created_at = now()
$queryss = "SELECT * FROM    tbl_singleakata where 	customerId  ='".$tsoftId."' and category_name='".$catid."' and id='".$bidid."'";

$resultss = $crud->getData($queryss);
foreach ($resultss as $key => $row) { 	
  $single_akata_name = $row['category_name'];	
  $akata01 = $row['akata01'];	
  $akata02 = $row['akata02'];	
  $akata03 = $row['akata03'];	
  $akata04 = $row['akata04'];	
  $akata05 = $row['akata05'];	
  $akata06 = $row['akata06'];	
  $akata07 = $row['akata07'];	
  $akata08 = $row['akata08'];	
  $akata09 = $row['akata09'];	
  $akata10 = $row['akata10'];	
}

?>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <div class="container">

<div class="row" >
       <div class="col-md-12" >
        <div class="serviceBox">
            <h3 class="title">Single Akata</h3> 
               <section class="h-100 h-custom">
  <div class="container py-1h-100">
    <div class="row d-flex justify-content h-100">
      <div class="col-lg-11 col-xl-11">
        <div class="card rounded-3">
         
          
          <div class="card-body">
         

             <div class="row">
             <div class="col-md-12" style="padding: 20px;">
                <input type="hidden" name="mattaka_name" value="ichaapurti_day_single" />
                <input type="hidden" name="customer_id" value="<?php echo $_SESSION['tsoftId'];?>" />
                
                 <table style="width:100%">
                  <tr style="color: black">
                    <td colspan="4" style="text-align: center;"><h3>  Single Akata Number (<?php echo $single_akata_name; ?>)</h3></td>
                    <td  style="text-align: right;">  <a href="bid_history.php"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                  </tr>
                    <tr style="color: black">
                    <td colspan="5" style="text-align: left;">&nbsp;</td>
                  </tr>
                   <tr style="color: black">
                    <td>0</td>
                    <td>1</td>
                    <td>2</td>
                    <td>3</td>
                    <td>4</td>
                  </tr>
                   <tr><td><input type="number" name="akata0" class="form-control" value="<?php echo $akata01;?>" disabled /></td>
                    <td><input type="number" name="akata1" class="form-control" value="<?php echo $akata02;?>" disabled /></td>
                    <td><input type="number" name="akata2" class="form-control" value="<?php echo $akata03;?>" disabled /></td>
                    <td><input type="number" name="akata3" class="form-control" value="<?php echo $akata04;?>" disabled /></td>
                    <td><input type="number" name="akata4" class="form-control" value="<?php echo $akata05;?>" disabled /></td>
                  </tr>

                   <tr style="color: black;">
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                  </tr>
                  <tr><td><input type="number" name="akata5" class="form-control"  value="<?php echo $akata06;?>" disabled/></td>
                    <td><input type="number" name="akata6" class="form-control" value="<?php echo $akata07;?>" disabled /></td>
                    <td><input type="number" name="akata7" class="form-control" value="<?php echo $akata08;?>" disabled /></td>
                    <td><input type="number" name="akata8" class="form-control" value="<?php echo $akata09;?>" disabled /></td>
                    <td><input type="number" name="akata9" class="form-control" value="<?php echo $akata10;?>" disabled /></td>
                  </tr>
                   
                 </table>
                </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
     
</section> 

        </div>
    </div>    
</div>
        
</div>

   <?php include "footer.php"; ?>
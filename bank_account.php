<?php 
error_reporting(0);
session_start();
include "classess/check_session.php";
include("classess/etsystem.php");
$crud = new Etstysem();
include "header.php";

 $queryss = "SELECT * FROM tab_bankdetails where customerid  ='".$tsoftId."'";

 $resultss = $crud->getData($queryss);
foreach ($resultss as $key => $row) { 
    $accountno = $row['accountno'];
    $bankname = $row['bankname'];
    $ifsc_code = $row['ifsc_code'];
    $acholder = $row['acholder'];
    $paytmno = $row['paytmno'];
    $googlepayno = $row['googlepayno'];
    $phonepayno = $row['phonepayno'];
}
?>

<div class="container" style="font-size: 14px;">
            <!-- Main content -->
            <section>

        <h3 class="box-title">Bank Details</h3>
       <div class="box-body">
        
         <div class="mt-2 mb-3">
             
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-4 form-group">
                <label for="location">Full Name</label>
                  <input type="text" class="form-control" name="fullname" placeholder="Full Name" value="<?php echo $tsoftId;?>" readonly="readonly">  
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Account Number</label>
                  <input type="text" class="form-control" name="accountno" placeholder="Account Number"  value="<?php echo $accountno;?>" readonly="readonly">  
            </div>
            <div class="col-md-4 form-group">
                <label for="campus">Bank Name</label>                       
               <input type="text" class="form-control" name="bankname" placeholder="Bank Name" value="<?php echo $bankname;?>" readonly="readonly">  
            </div>
            <div class="col-md-4 form-group">
                <label for="office">IFSC CODE </label>
               <input type="text" class="form-control" name="ifsc_code" placeholder="IFSC CODE" value="<?php echo $ifsc_code;?>" readonly="readonly"> 
            </div>
             <div class="col-md-4 form-group">
                <label for="office">Account Holder</label>
               <input type="text" class="form-control" name="acholder" placeholder="Account Holder" value="<?php echo $acholder;?>" readonly="readonly"> 
            </div>
          
            <div class="col-md-4 form-group">
                <label for="make">Paytm Number</label>                 
                <input type="text" class="form-control" name="paytmno" placeholder="Paytm Number"  value="<?php echo $paytmno;?>" readonly="readonly">  
            </div>
             <div class="col-md-4 form-group">
                <label for="make">Gpay Number</label>                 
                <input type="text" class="form-control" name="googlepayno" placeholder="Gpay Number" value="<?php echo $googlepayno;?>" readonly="readonly">  
            </div>
             <div class="col-md-4 form-group">
                <label for="make">PhonePe Number</label>                 
                <input type="text" class="form-control" name="phonepayno" placeholder="PhonePe Number" value="<?php echo $phonepayno;?>" readonly="readonly">  
            </div>
           
        </div>        
       
    </div>
  

</div>
            </section>
            <!-- /.content -->
        
            </div>

   <?php include "footer.php"; ?>
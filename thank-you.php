<?php 
error_reporting(0);
session_start();
$tsoftId = $_SESSION['tsoftId'];
include "header.php";

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
            <h3 class="title">Thank You</h3> 
               <section class="h-100 h-custom">
  <div class="container py-1h-100">
    <div class="row d-flex justify-content h-100">
      <div class="col-lg-11 col-xl-11">
        <div class="card rounded-3">
         
          
          <div class="card-body">
         
           

             <div class="row">
             <div class="col-md-12" style="padding: 20px;">
                
                 <table style="width:100%">
                  <tr style="color: black">
                    <td colspan="5" style="text-align: center;"><h3>You have successfully submitted</h3></td>
                  </tr>
                    <tr style="color: black">
                    <td colspan="5" style="text-align: left;">&nbsp;</td>
                  </tr>
                  
                 </table>
                </div>
            </div>
             
              <div class="row">
               
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-12">
                  <a href="dashboard.php"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a>
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
            <!-- /.content-wrapper -->
 <!-- Main Footer -->
            <?php include "footer.php"; ?>
            


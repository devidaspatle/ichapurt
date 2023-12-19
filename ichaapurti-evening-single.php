<?php
session_start();
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
            <h3 class="title">Single Akata</h3> 
               <section class="h-100 h-custom">
  <div class="container py-1h-100">
    <div class="row d-flex justify-content h-100">
      <div class="col-lg-11 col-xl-11">
        <div class="card rounded-3">
         
          
          <div class="card-body">
         
            <form method="POST" action="classess/single_akata_code.php">

             <div class="row">
             <div class="col-md-12" style="padding: 20px;">
                <input type="hidden" name="category_name" value="ichaapurti_evening_single" class="form-control" />
                 <input type="hidden" name="customerId" value="<?php echo $_SESSION['tsoftId'];?>" />
                 <table style="width:100%">
                  <tr style="color: black">
                    <td colspan="4" style="text-align: center;"><h3>Enter  Single Akata Number</h3></td>
                    <td  style="text-align: right;">  <a href="ichaapurti-evening.php"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
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
                   <tr><td><input type="number" name="akata0" class="form-control"  min="10"/></td>
                    <td><input type="number" name="akata1" class="form-control"  min="10"/></td>
                    <td><input type="number" name="akata2" class="form-control"  min="10"/></td>
                    <td><input type="number" name="akata3" class="form-control"  min="10"/></td>
                    <td><input type="number" name="akata4" class="form-control"  min="10"/></td>
                  </tr>

                   <tr style="color: black;">
                    <td>5</td>
                    <td>6</td>
                    <td>7</td>
                    <td>8</td>
                    <td>9</td>
                  </tr>
                  <tr><td><input type="number" name="akata5" class="form-control"  min="10" /></td>
                    <td><input type="number" name="akata6" class="form-control"  min="10" /></td>
                    <td><input type="number" name="akata7" class="form-control"  min="10" /></td>
                    <td><input type="number" name="akata8" class="form-control"  min="10" /></td>
                    <td><input type="number" name="akata9" class="form-control"  min="10" /></td>
                  </tr>
                   
                 </table>
                </div>
            </div>
             
              <div class="row">
               
                <div class="col-md-12">&nbsp;</div>
                <div class="col-md-12">
                  <input type="hidden" name="SingleData" value="SingleData"  />
                   <button type="submit" class="btn btn-success btn-lg mb-1">Proceed</button>
                </div>
              </div>
            </form>

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
            


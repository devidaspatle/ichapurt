<?php 
session_start();
include "header.php";
?>
 <div class="container">


            <!-- Main content -->
            <section class="content container-fluid" style="font-size: 12px;">


<div class="row" >
       <div class="col-md-10" >
        <div class="serviceBox" style="height: 400px;">
            <h3 class="title">Ichaapurti Evening</h3> 
                <?php if(empty($tsoftId)){ ?>
                <div class="col-md-4" style="padding-top: 20px;"><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\single_akata.png"> </a></div>
                <div class="col-md-4" style="padding-top: 20px;"><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\jodi.png"></a></div>
                <div class="col-md-4" style="padding-top: 20px;">><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\patti.png"></a></div>
                <?php } else { ?>
                <div class="col-md-4" style="padding-top: 20px;"><a href="ichaapurti-evening-single.php"><img src="assets\dist\img\single_akata.png"> </a></div>
                <div class="col-md-4" style="padding-top: 20px;"><a href="ichaapurti-evening-jodi.php"><img src="assets\dist\img\jodi.png"></a></div>
                <div class="col-md-4" style="padding-top: 20px;">><a href="ichaapurti-evening-pati.php"><img src="assets\dist\img\patti.png"></a></div>
                <?php }?>
        </div>
    </div>    
</div>

            </section>
            <!-- /.content -->
       
</div>

            <!-- /.content-wrapper -->
 <!-- Main Footer -->

            


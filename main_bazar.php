<?php 
session_start();
include "header.php";
$patiid = $_GET['msg'];
?>
 <div class="container">


            <!-- Main content -->
            <section class="content container-fluid" style="font-size: 12px;">


<div class="row" >
       <div class="col-md-10" >
        <div class="serviceBox" style="height: 400px;">
            <h3 class="title">Main Bazar </h3> 
             <?php if(empty($tsoftId) && $patiid =='open'){ ?>
                <div class="col-md-4" style="padding-top: 20px;"><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\single_akata.png"> </a></div>
                <div class="col-md-4"  style="padding-top: 20px;"><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\jodi.png"></a></div>
                <div class="col-md-4"  style="padding-top: 20px;">><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\patti.png"></a></div>
                <?php } elseif($patiid =='open') {?>
                <div class="col-md-4" style="padding-top: 20px;"><a href="main-bazar-single.php?msg=open"><img src="assets\dist\img\single_akata.png"> </a></div>
                <div class="col-md-4"  style="padding-top: 20px;"><a href="main-bazar-jodi.php?msg=open"><img src="assets\dist\img\jodi.png"></a></div>
                <div class="col-md-4"  style="padding-top: 20px;">><a href="main-bazar-pati.php?msg=open"><img src="assets\dist\img\patti.png"></a></div>
                <?php } ?>
                <?php if(empty($tsoftId) && $patiid =='close'){ ?>
                <div class="col-md-6" style="padding-top: 20px;"><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\single_akata.png"> </a></div>
                <div class="col-md-6"  style="padding-top: 20px;">><a href="" onclick="return confirm('Please Login before.')"><img src="assets\dist\img\patti.png"></a></div>
                 <?php } elseif($patiid =='close') {?>
                <div class="col-md-6" style="padding-top: 20px;"><a href="main-bazar-single.php?msg=close"><img src="assets\dist\img\single_akata.png"> </a></div>
                <div class="col-md-6"  style="padding-top: 20px;">><a href="main-bazar-pati.php?msg=close"><img src="assets\dist\img\patti.png"></a></div>
                <?php } ?>
 
        </div>
    </div>    
</div>

            </section>
            <!-- /.content -->
       
</div>

            <!-- /.content-wrapper -->
 <!-- Main Footer -->

            


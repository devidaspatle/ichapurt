<?php 
session_start();
$tsoftId = $_SESSION['tsoftId'];
 
include("classess/result_code.php");
include("classess/category_time_code.php");
include "header.php";

date_default_timezone_set('Asia/Kolkata');
 $date = new \DateTime();
 $opentime = date_format(strtotime('+3 hours', strtotime($date)), 'H:i');
 $closetime = date("H:i", strtotime($catoutTime11));
                    
?>
 <div class="container">

<div style="float: right;"><a href="dashboard.php"><button class="btn btn-success">Refersh </button> </a></div>
</div>
            <!-- Main content -->
            <section class="content container-fluid" style="font-size: 12px;">


<div class="row service-div">
       <div class="col-md-4">
        <div class="serviceBox">
            <h3 class="title">Ichaapurti Morning</h3> 
               
            <h3 class="box-count"><?php echo $double_pati11; ?>&nbsp;<?php echo $single_akata11; ?><?php if(!empty($double_paticls11)){ ?><?php echo $single_akatacls11; ?>&nbsp;<?php echo $double_paticls11; ?>
            <?php } else { ?>X &nbsp;XXX<?php } ?>
            </h3>
            <div class="service-icon">
                <span>  <i class="fa fa-graduation-cap"></i></span>
            </div> 
              <?php 
              $opentimeop11 = $inopentime11 - '2:00';
              $inclosetimess11 = $inclosetime11 - '2:00';
              if(($opentime>=$opentimeop11) &&  ($inclosetime11 >=$opentime)) {
            ?>
          <a class="small-box-footer" style="font-size: 14px; color: green">Market Running</a>
           <?php } else { ?>
          <a class="small-box-footer" style="font-size: 14px; color: red">Market Closed</a>
            <?php } ?>
           <br/>
            <br/>
          <?php 
          if( ($opentime>=$opentimeop11) &&  ($inopentime11>=$opentime)) { ?>
         <a href="ichaapurti_morning.php?msg=open" class="small-box-footer" style="font-size: 16px;">Open-<?php echo $opentime11; ?></a>
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Open-<?php echo $opentime11; ?></a>
         <?php } ?>
          <?php if( ($opentime>=$inclosetimess11) &&  ($inclosetime11>=$opentime)){ ?>
         &nbsp;&nbsp;&nbsp;<a href="ichaapurti_morning.php?msg=close" class="small-box-footer" style="font-size: 16px;">Close-<?php echo $catoutTime11; ?> 
        </a> 
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Close-<?php echo $catoutTime11; ?></a>
         <?php  } ?>
        </div>
    </div>
       <div class="col-md-4">
        <div class="serviceBox">
            <h3 class="title">Prabhat </h3>  
           <?php if($date=='$created_at'){?>
             <h3 class="box-count"><?php echo $double_pati12; ?>&nbsp;<?php echo $single_akata12; ?><?php if(!empty($double_paticls12)){ ?><?php echo $single_akatacls12; ?>&nbsp;<?php echo $double_paticls12; ?>
            <?php } else { ?>X &nbsp;XXX<?php } ?>
            </h3>
            <?php } else {?>
             <h3 class="box-count">XXX &nbsp; XX &nbsp; XXX
            </h3>
            <?php } ?>
             <div class="service-icon">
                <span>  <i class="fa fa-th-large"></i></span>
            </div> 

            <?php 
             $opentimeop12 = $inopentime12 - '2:00';
             $inclosetimess12 = $inclosetime12 - '2:00';
              if(($opentime>=$opentimeop12) &&  ($inclosetime12 >=$opentime)) {
            ?>
          <a href="prabhat.php" class="small-box-footer" style="font-size: 14px; color: green">Market Running</a>
           <?php } else { ?>
          <a class="small-box-footer" style="font-size: 14px; color: red">Market Closed</a>
            <?php } ?>
           <br/>
            <br/>
           <?php 
          if( ($opentime>=$opentimeop12) &&  ($inopentime12>=$opentime)) { ?>
         <a href="prabhat.php?msg=open"  class="small-box-footer" style="font-size: 16px;"> Open-<?php echo $opentime12; ?> </a>
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Open-<?php echo $opentime12; ?></a>
         <?php } ?>
          <?php if( ($opentime>=$inclosetimess12) &&  ($inclosetime12>=$opentime)){ ?>
               
        &nbsp;&nbsp;<a href="prabhat.php?msg=close" class="small-box-footer" style="font-size: 16px;">
          Close-<?php echo $catoutTime12; ?> 
        </a> 
         <?php  } else {?>
         &nbsp;&nbsp;<a class="small-box-footer" style="font-size: 16px;color: red">
          Close-<?php echo $catoutTime12; ?> 
        </a> 
         <?php } ?>
       
        </div>

    </div>
   
         <div class="col-md-4">
        <div class="serviceBox">
            <h3 class="title">Ichaapurti Day</h3> 
            
            <h3 class="box-count"><?php echo $double_pati13; ?>&nbsp;<?php echo $single_akata13; ?><?php if(!empty($double_paticls13)){ ?><?php echo $single_akatacls13; ?>&nbsp;<?php echo $double_paticls13; ?>
            <?php } else { ?>X &nbsp;XXX<?php } ?>
            </h3>
            <div class="service-icon">
                <span>  <i class="fa fa-th"></i></span>
            </div> 
             <?php 
              $opentimeop13 = $inopentime13 - '2:00';
              $inclosetimess13 = $inclosetime13 - '2:00';
            if(($opentime>=$opentimeop13) &&  ($inclosetime13 >=$opentime)) {
            ?>
          <a href="ichaapurti_day.php" class="small-box-footer" style="font-size: 14px; color: green">Market Running</a>
           <?php } else { ?>
          <a class="small-box-footer" style="font-size: 14px; color: red">Market Closed</a>
            <?php } ?>
           <br/>
            <br/>
            <?php 
         if( ($opentime>=$opentimeop13) &&  ($inopentime13>=$opentime)) {?>
         <a href="ichaapurti_day.php?msg=open"  class="small-box-footer" style="font-size: 16px;"> Open-<?php echo $opentime13; ?> </a>
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Open-<?php echo $opentime13; ?></a>
         <?php } ?>
          <?php if( ($opentime>=$inclosetimess13) &&  ($inclosetime13>=$opentime)){ ?>
               
        &nbsp;&nbsp;<a href="ichaapurti_day.php?msg=close" class="small-box-footer" style="font-size: 16px;">
          Close-<?php echo $catoutTime13; ?> 
        </a> 
         <?php  } else {?>
         &nbsp;&nbsp;<a class="small-box-footer" style="font-size: 16px;color: red">
          Close-<?php echo $catoutTime13; ?> 
        </a> 
         <?php } ?>
         
        </div>
    </div>
         
       
      <div class="col-md-4">
        <div class="serviceBox">
            <h3 class="title">Kalyan</h3>   
              <h3 class="box-count" style="text-align: center;"><?php echo $double_pati14; ?>&nbsp;<?php echo $single_akata14; ?><?php if(!empty($double_paticls14)){ ?><?php echo $single_akatacls14; ?>&nbsp;<?php echo $double_paticls14; ?>
            <?php } else { ?>X &nbsp;XXX<?php } ?>
            </h3>
            <!--<h3 class="box-count" style="text-align: center;"><?php //echo $mattaka_number14; ?></h3>-->
            <div class="service-icon">
                <span>  <i class="fa fa-key"></i></span>
            </div> 
            <?php 
             $opentimeop14 = $inopentime14 - '2:00';
             $inclosetimess14 = $inclosetime14 - '2:00';
             if(($opentime>=$opentimeop14) &&  ($inclosetime14 >=$opentime)) {
            ?>
          <a href="kalyan.php" class="small-box-footer" style="font-size: 14px; color: green">Market Running</a>
           <?php } else { ?>
          <a class="small-box-footer" style="font-size: 14px; color: red">Market Closed</a>
            <?php } ?>
           <br/>
            <br/>
             <?php 
        
          if( ($opentime>=$opentimeop14) &&  ($inopentime14>=$opentime)) { ?>
         <a href="kalyan.php?msg=open"  class="small-box-footer" style="font-size: 16px;"> Open-<?php echo $opentime14; ?> </a>
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Open-<?php echo $opentime14; ?></a>
         <?php } ?>
          <?php if( ($opentime>=$inclosetimess14) &&  ($inclosetime14>=$opentime)){ ?>
               
        &nbsp;&nbsp;<a href="kalyan.php?msg=close" class="small-box-footer" style="font-size: 16px;">
          Close-<?php echo $catoutTime14; ?> 
        </a> 
         <?php  } else {?>
         &nbsp;&nbsp;<a class="small-box-footer" style="font-size: 16px;color: red">
          Close-<?php echo $catoutTime14; ?> 
        </a> 
         <?php } ?>
        </div>
    </div>
     
       <div class="col-md-4">
        <div class="serviceBox">
            <h3 class="title"> Ichaapurti Night</h3>   
               
            <h3 class="box-count"><?php echo $double_pati15; ?>&nbsp;<?php echo $single_akata15; ?><?php if(!empty($double_paticls15)){ ?><?php echo $single_akatacls15; ?>&nbsp;<?php echo $double_paticls15; ?>
            <?php } else { ?>X &nbsp;XXX<?php } ?>
            </h3>
            <div class="service-icon">
                <span>  <i class="fa fa-file-text"></i></span>
            </div> 
           <?php 
              $opentimeop15 = $inopentime15 - '2:00';
              $inclosetimess15 = $inclosetime15 - '2:00';
             if(($opentime>=$opentimeop15) &&  ($inclosetime15 >=$opentime)) {
            ?>
          <a href="ichaapurti_night.php" class="small-box-footer" style="font-size: 14px; color: green">Market Running</a>
           <?php } else { ?>
          <a class="small-box-footer" style="font-size: 14px; color: red">Market Closed</a>
            <?php } ?>
           <br/>
            <br/>
             <?php 
         
          if( ($opentime>=$opentimeop15) &&  ($inopentime15>=$opentime)) {?>
         <a href="ichaapurti_night.php?msg=open"  class="small-box-footer" style="font-size: 16px;"> Open-<?php echo $opentime15; ?> </a>
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Open-<?php echo $opentime15; ?></a>
         <?php } ?>
          <?php if( ($opentime>=$inclosetimess15) &&  ($inclosetime15>=$opentime)){?>
               
        &nbsp;&nbsp;<a href="ichaapurti_night.php?msg=close" class="small-box-footer" style="font-size: 16px;">
          Close-<?php echo $catoutTime15; ?> 
        </a> 
         <?php  } else {?>
         &nbsp;&nbsp;<a class="small-box-footer" style="font-size: 16px;color: red">
          Close-<?php echo $catoutTime15; ?> 
        </a> 
         <?php } ?>
         
        
        </div>
    </div> 
    
      <div class="col-md-4">
        <div class="serviceBox">
            <h3 class="title">Rajdhani Night</h3> 
                   
            <h3 class="box-count"><?php echo $double_pati16; ?>&nbsp;<?php echo $single_akata16; ?><?php if(!empty($double_paticls16)){ ?><?php echo $single_akatacls16; ?>&nbsp;<?php echo $double_paticls16; ?>
            <?php } else { ?>X &nbsp;XXX<?php } ?>
            </h3>
            <div class="service-icon">
                <span>  <i class="fa fa-building-o"></i></span>
            </div> 
             <?php 
              $opentimeop16 = $inopentime16 - '2:00';
              $inclosetimess16 = $inclosetime16 - '2:00';
	     
            if(($opentime>=$opentimeop16) && ($inclosetime16>=$opentime)) {
            ?>
          <a href="rajdhani_night.php" class="small-box-footer" style="font-size: 14px; color: green">Market Running</a>
           <?php } else { ?>
          <a class="small-box-footer" style="font-size: 14px; color: red">Market Closed</a>
            <?php } ?>
           <br/>
            <br/>
             <?php 
          if( ($opentime>=$opentimeop16) &&  ($inopentime16>=$opentime)) {?>
         <a href="rajdhani_night.php?msg=open"  class="small-box-footer" style="font-size: 16px;"> Open-<?php echo $opentime16; ?> </a>
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Open-<?php echo $opentime16; ?></a>
         <?php } ?>
          <?php if( ($opentime>=$inclosetimess16) &&  ($inclosetime16>=$opentime)){ ?>
               
        &nbsp;&nbsp;<a href="rajdhani_night.php?msg=close" class="small-box-footer" style="font-size: 16px;">
          Close-<?php echo $catoutTime16; ?> 
        </a> 
         <?php  } else {?>
         &nbsp;&nbsp;<a class="small-box-footer" style="font-size: 16px;color: red">
          Close-<?php echo $catoutTime16; ?> 
        </a> 
         <?php } ?>
        
        </div>
    </div>
         <div class="col-md-4">
        <div class="serviceBox">
            <h3 class="title">MAIN BAZAR </h3> 
           <h3 class="box-count"><?php echo $double_pati17; ?>&nbsp;<?php echo $single_akata17; ?><?php if(!empty($double_paticls17)){ ?><?php echo $single_akatacls17; ?>&nbsp;<?php echo $double_paticls17; ?>
            <?php } else { ?>X &nbsp;XXX<?php } ?>
            </h3>
            <div class="service-icon">
                <span>  <i class="fa fa-file"></i></span>
            </div> 
            <?php
              echo $opentimeop17 = $inopentime17 - '2:00';
               $inclosetimess17 = $inclosetime17 - '2:00';

          if(($opentime >= $opentimeop17) &&  ($inclosetime17 >= $opentime)){?>
          <a href="main_bazar.php" class="small-box-footer" style="font-size: 14px; color: green">Market Running </a>
           <?php } else { ?>
          <a class="small-box-footer" style="font-size: 14px; color: red">Market Closed</a>
            <?php } ?>
           <br/>
            <br/>
           <?php 
          if( ($opentime>=$opentimeop17) &&  ($inopentime17>=$opentime)) {?>
         <a href="main_bazar.php?msg=open"  class="small-box-footer" style="font-size: 16px;"> Open-<?php echo $opentime17; ?> </a>
         <?php  } else {?>
         <a  class="small-box-footer" style="font-size: 16px; color:red">Open-<?php echo $opentime17; ?></a>
         <?php } ?>
          <?php  if(($opentime >= $inclosetimess17) &&  ($inclosetime17 >= $opentime)){ ?>
               
        &nbsp;&nbsp;<a href="main_bazar.php?msg=close" class="small-box-footer" style="font-size: 16px;">
          Close-<?php echo $catoutTime17; ?> 
        </a> 
         <?php  } else {?>
         &nbsp;&nbsp;<a class="small-box-footer" style="font-size: 16px;color: red">
          Close-<?php echo $catoutTime17; ?> 
        </a> 
         <?php } ?>
         
        </div>
    </div>
      
</div>

            </section>
            <!-- /.content -->
         <div class="col-lg-12 col-xs-12">
        <div class="serviceBox" style="color:#000; padding: 10px;">
            <h3  style="line-height: 30px; color: red">-:DISCLAIMER:-</h3>     
           
          <p>We strictly recommend you to please visit and browse this site on your own risk. All the information available here is strictly for informational purposes and based on astrology and numerology calculations. We are no way associated or affiliated with any illegal Matka business. We abide by rules and regulations of the regions where you are accessing the website. May be it is illegal or banned in your region. If you are using our website despite ban, you will be solely responsible for the damage or loss occurred or legal action taken. Please leave our website immediately if you dont like our disclaimer. Copying any information / content posted on the website is strictly prohibited and against the law.</p>
    </div>   </div>     
           

            <!-- /.content-wrapper -->
 <!-- Main Footer -->
            <?php include "footer.php"; ?>
              <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


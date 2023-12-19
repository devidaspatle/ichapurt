<?php 
error_reporting(0);
session_start();
include "classess/check_session.php";
include("classess/etsystem.php");
$crud = new Etstysem();
include "header.php";?>

<div class="container" style="font-size: 14px;">
            <!-- Main content -->
  <section>

   
       <h3 class="box-title">Single Akata Bid History &nbsp;<div style="float: right"><a href="bid_history.php"><button type="button" class="btn btn-warning" style="font-size: 14px;">&nbsp;Single&nbsp;</button> </a>&nbsp;<a href="jodibid_history.php"><button type="button" class="btn btn-primary" style="font-size: 14px;">&nbsp;Jodi&nbsp;</button></a>&nbsp;<a href="pattibid_history.php"><button type="button" class="btn btn-success" style="font-size: 14px;">&nbsp;Patti&nbsp;</button>  </a></div></h3>
      
        <div>&nbsp;</div>
          <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Category Name </th>
                    <th>Create Date </th>
                    <th>Single Akata  </th>
                    <!-- <th>Jodi  </th>
                    <th>Patti </th> -->
                </tr>
            </thead>
            <tfoot>
             <?php
             $i=1;
             $queryss = "SELECT * FROM    tbl_singleakata where customerId  ='".$tsoftId."' order by id desc";
                $resultss = $crud->getData($queryss);
                foreach ($resultss as $key => $row) { 		
                ?>   
            <tr>
                  <th><?php echo $i++; ?></th>
                  <th><?php if($row['category_name']=='ichaapurti_morning_single'){
                            echo "Ichaapurti Morning";
                          }else if($row['category_name']=='ichaapurti_day_single'){
                               echo "Ichaapurti Day";
                          }else if($row['category_name']=='ichaapurti_evening_single'){
                               echo "Ichaapurti Evening";
                          }else if($row['category_name']=='ichaapurti-night-single'){
                               echo "Ichaapurti Night";
                          }else if($row['category_name']=='kalyan_single'){
                               echo "Kalyan";
                          }else if($row['category_name']=='prabhat_single'){
                               echo "Prabhat";
                          }else if($row['category_name']=='rajdhani-night-single'){
                               echo "Rajdhani Night";
                          }
                      ?></th>
                   <th><?php echo $row['created_at'];?></th>
                  <th><a href="single_bid_history.php?bidid=<?php echo $row['id'];?>&catid=<?php echo $row['category_name'];?>"><button type="button" class="btn btn-warning" style="font-size: 14px;">&nbsp;Single&nbsp;</button> </a> </th>
                  <!-- <th><a href="jodi_bid_history.php"><button type="button" class="btn btn-primary" style="font-size: 14px;">&nbsp;Jodi&nbsp;</button></a></th>
                  <th><a href="patti_bid_history.php"><button type="button" class="btn btn-success" style="font-size: 14px;">&nbsp;Patti&nbsp;</button>  </a></th> -->
                </tr>  
                <?php } ?> 
            </tfoot> 
        </table>
         

            </section>
            <!-- /.content -->
        
            </div>

   <?php include "footer.php"; ?>
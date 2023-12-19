<?php 
error_reporting(0);
session_start();
include "classess/check_session.php";
include("classess/etsystem.php");
$crud = new Etstysem();
include "header.php";
?>
<div class="container" style="font-size: 14px;">
            <!-- Main content -->
  <section>

   
        <h3 class="box-title">Patti Win History  &nbsp;<div style="float: right"><a href="jodi_win_history.php"><button type="button" class="btn btn-primary" style="font-size: 14px;">&nbsp;Jodi&nbsp;</button></a>&nbsp;<a href="patti_win_history.php"><button type="button" class="btn btn-success" style="font-size: 14px;">&nbsp;Patti&nbsp;</button>  </a>&nbsp;<a href="single_win_history.php"><button type="button" class="btn btn-warning" style="font-size: 14px;">&nbsp;Single&nbsp;</button> </a></div></h3>
      
        <div>&nbsp;</div>
          <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Date </th>
                    <th>Category Name </th>
                    <th>Patti Number  </th>
                    <th>Amount  </th>
                </tr>
            </thead>
            <tfoot>
             <?php
             $i=1;
             $queryss = "SELECT * FROM    tbl_patti  where customerId  ='".$tsoftId."' order by id desc";
                $resultss = $crud->getData($queryss);
                foreach ($resultss as $key => $row) { 		
                ?>   
            <tr>
                  <th><?php echo $i++; ?></th>
                  <th><?php echo $row['created_at'];?></th>
                  <th><?php if($row['category_name']=='ichaapurti_morning_patti'){
                            echo "Ichaapurti Morning";
                          }else if($row['category_name']=='ichaapurti_day_patti'){
                               echo "Ichaapurti Day";
                          }else if($row['category_name']=='ichaapurti_evening_patti'){
                               echo "Ichaapurti Evening";
                          }else if($row['category_name']=='ichaapurti-night-patti'){
                               echo "Ichaapurti Night";
                          }else if($row['category_name']=='kalyan_patti'){
                               echo "Kalyan";
                          }else if($row['category_name']=='prabhat_patti'){
                               echo "Prabhat";
                          }else if($row['category_name']=='rajdhani-night-patti'){
                               echo "Rajdhani Night";
                          }
                      ?></th>
                   <th>234</th>
                  <th>1000</th>
                  
                </tr>  
                <?php } ?> 
            </tfoot>  
        </table>
            </section>
            <!-- /.content -->
        
            </div>

   <?php include "footer.php"; ?>
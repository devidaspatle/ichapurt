<?php 
error_reporting(0);
session_start();
include("classess/etsystem.php");
$crud = new Etstysem();

include "header.php";


?>

<div class="container" style="font-size: 14px;">
            <!-- Main content -->
            <section class="content container-fluid">

<div>
    <div class="box-header with-border">
        <h3 class="box-title">Transfer Points</h3>
       <div class="box-body">
        
          <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Transfer Date </th>
                    <th>Paid Point  </th>
                    <th>Balance Point  </th>
                     <th>Status  </th>
                </tr>
            </thead>
            <tfoot>
                
            <?php 
            
              $queryss = "SELECT * FROM   tbl_transferpoint where 	customerId  ='".$tsoftId."'";

                   $resultss = $crud->getData($queryss);
            $i =1; foreach ($resultss as $key => $row) { ?>
                <tr>
                  <td class="text-center"><?php echo $i++; ?></td>
                  <td><?= date("d/m/Y h:i",strtotime($row['created_at']));?></td>
                  <th><?php echo $row['pay_point']; ?> </th>
                   <th><?php echo $row['pay_point']; ?> </th>
                  <th class="text-center"><?php echo $row['currentStatus']; ?> </th>
                </tr>   
                <?php }?>
            </tfoot> 
        </table>
           </div>
    </div>
    <div class="box-body">
    </div>

</div>
            </section>
            <!-- /.content -->
        
            </div>

   <?php include "footer.php"; ?>
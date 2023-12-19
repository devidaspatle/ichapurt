<?php 
session_start();
$tsoftId = $_SESSION['tsoftId'];
include "classess/check_session.php";
include "header.php";

?>

<div class="container" style="font-size: 14px;">
            <!-- Main content -->
            <section class="content container-fluid">

<div>
    <div class="box-header with-border">
        <h3 class="box-title">Win History</h3>
       <div class="box-body">
        
          <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Date </th>
                    <th>Amount  </th>
                    <th class="text-center">Edit</th>
                </tr>
            </thead>
            <tfoot>
            <tr>
                  <th>1</th>
                  <th>Title</th>
                  <th>Description </th>
                  <th class="text-center">Edit</th>
                </tr>   
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
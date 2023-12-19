<?php 
include "header.php";
$emailid = $_SESSION['emailid'];
?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
            <!-- Main content -->
            <section class="content container-fluid" style="font-size: 12px;">


<div class="container">
       <div class="col-md-4">
           <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
   <?php include "includes/left.php"; ?>
    <!-- /.sidebar -->
</aside>  
      
    </div>
       <div class="col-md-12">
          <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Win History    
                </h1>
               
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
    <div class="box">
    <div class="box-header with-border">
        
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="mt-2 mb-3">
            <form action="" method="POST">
       
      
            <div class="mb-3 row text-center" >
                <label for="title" class="col-sm-2 col-form-label">Enter Point to Withdraw</label>
                <div class="col-sm-3">
                <input type="text" id="name" name="name" value="" class="form-control">
                </div>
               
               <div class="col-sm-2">
                <button class="btn btn-seccess" type="submit" name="add_submit">Submit </button>
             
            </div>   
            </div>
      </form>
            
        </div>
                                                 
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Customer Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Create Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

            </tfoot> 
        </table>
        
</div>

<script src="https://ghru.edu.in/ghru_exam/assets/dist/js/app/relasi/kelasdosen/data.js"></script>          </section>
            <!-- /.content -->
            </div>

    </div>
   
    
          
              <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>


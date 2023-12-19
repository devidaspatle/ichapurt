@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Create Category 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Create Category   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> Create Category  </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
             <form action="{{ route('categories.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-6 form-group">
                <label for="location">Opening Time</label>
                  <input type="text" class="form-control" name="catTime" placeholder="Opening Time" value="" required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Closing Time </label>
                  <input type="text" class="form-control" name="catoutTime" placeholder="Closing Time" value="" required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Category Name</label>
                  <input type="text" class="form-control" name="catName" placeholder="Category Name" value="" required="required">  
            </div>
        </div>        
        <div class="ms-auto pageheader-btn mt-3">
               <button class="btn button--effect-1" type="submit" name="add_submit"> <i class="fa fa-paper-plane"></i> Submit </button> 
        </div>
      </form>
           </div>
           </div>
</div>
      </section>
            <!-- /.content -->
            </div>
        
@include('layouts.footer')
           
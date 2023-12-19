@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Create Notice 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Create Notice   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> Create Notice  </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
             <form action="{{ route('notices.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-12 form-group">
                <label for="location">Title</label>
                  <input type="text" class="form-control" name="title" placeholder="Title" value="" required="required">  
            </div>
            <div class="col-md-12 form-group">
                <label for="location">Description</label>
                <textarea name="description"  class="form-control" rows=6 cols=100 required="required" ></textarea>
                   
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
            <!-- /.content-wrapper -->
            <!-- /.content-wrapper -->
@include('layouts.footer')
           
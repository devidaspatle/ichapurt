@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Edit Customer 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Edit Customer   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
  
    <div class="box-body">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
         <form method="post" action="{{ route('customers.update', $customers->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-6 form-group">
                <label for="location">Name</label>
                 
                  <input type="text" class="form-control" name="name" placeholder="Name" value="{{$customers->name}}" required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Mobile No</label>
              <input type="text" class="form-control" name="mobile" placeholder="Mobile No" value="{{$customers->mobile}}" required="required">  
                   
            </div>
            <!--  <div class="col-md-6 form-group">
                <label for="location">Email Id</label>
              <input type="mail" class="form-control" name="email" placeholder="Email Id">  
                   
            </div>-->
            
            <div class="col-md-4 form-group">
                <label for="location">Password </label>
              <input type="password" class="form-control" name="password" value="{{$customers->password}}" placeholder="password">    
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
           
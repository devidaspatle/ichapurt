@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                Fund Requests
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Fund Requests  </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
  
    <div class="box-body">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
         <form method="post" action="{{ route('fundrequests.update', $fundrequests->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-6 form-group">
                <label for="location">Select Customer Name</label>
                <select id="customerId" class="form-control" name="customerId" required="required">
                            <option value="" selected="selected">Select Customer Name</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->name}}"{{ ( $customer->name == $fundrequests->customerId ) ? 'selected' : 'selected' }}>{{$customer->name}}</option>
                            @endforeach
                </select>
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Request Point</label>
                <input type="text" id="point" name="point" value="{{$fundrequests->point}}" class="form-control">
                   
            </div>
            <!--  <div class="col-md-6 form-group">
                <label for="location">Email Id</label>
              <input type="mail" class="form-control" name="email" placeholder="Email Id">  
                   
            </div>-->
            
            <div class="col-md-4 form-group">
                <label for="location">Pay Point </label>
                <input type="text" id="pay_point" name="pay_point" value="{{$fundrequests->pay_point}}" class="form-control">   
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
           
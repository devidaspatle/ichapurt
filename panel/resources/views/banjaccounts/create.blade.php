@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Bank Details  
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Bank Details  </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Bank Details </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
             <form action="{{ route('banjaccounts.store') }}" method="post">
        {{ csrf_field() }}
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-4 form-group">
                <label for="location">Full Name</label>
                <select id="customerid" class="form-control" name="customerid" required="required">
                     <option value="" selected="selected">Select Full Name</option>
                     @foreach($customers as $customer)
                     <option value="{{$customer->custpmerid}}">{{$customer->name}}</option>
                     @endforeach
                  </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Account Number</label>
                  <input type="text" class="form-control" name="accountno" placeholder="Account Number">  
            </div>
            <div class="col-md-4 form-group">
                <label for="campus">Bank Name</label>                       
               <input type="text" class="form-control" name="bankname" placeholder="Bank Name">  
            </div>
            <div class="col-md-4 form-group">
                <label for="office">IFSC CODE </label>
               <input type="text" class="form-control" name="ifsc_code" placeholder="IFSC CODE"> 
            </div>
             <div class="col-md-4 form-group">
                <label for="office">Account Holder</label>
               <input type="text" class="form-control" name="acholder" placeholder="Account Holder"> 
            </div>
          
            <div class="col-md-4 form-group">
                <label for="make">Paytm Number</label>                 
                <input type="text" class="form-control" name="paytmno" placeholder="Paytm Number">  
            </div>
             <div class="col-md-4 form-group">
                <label for="make">Gpay Number</label>                 
                <input type="text" class="form-control" name="googlepayno" placeholder="Gpay Number">  
            </div>
             <div class="col-md-4 form-group">
                <label for="make">PhonePe Number</label>                 
                <input type="text" class="form-control" name="phonepayno" placeholder="PhonePe Number">  
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
           
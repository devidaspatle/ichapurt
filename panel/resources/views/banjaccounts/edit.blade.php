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
@if ($errors->any())
        <div class="alert alert-danger">
        <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
        </div><br />
        @endif
    <div class="box-header with-border">
        <h3 class="box-title">Bank Details </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
         <form method="post" action="{{ route('banjaccounts.update', $banjaccounts->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <input type="hidden" value=" {{ ucwords(Auth::user()->name) }}" id="c_created_by" name="c_created_by">
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-4 form-group">
                <label for="location">Full Name</label>
                <select id="customerid" class="form-control" name="customerid" required="required">
                     <option value="" selected="selected">Select Full Name</option>
                     @foreach($customers as $customer)
                     <option value="{{$customer->name}}"  {{ ( $customer->customerid == $banjaccounts->customerid) ? 'selected' : 'selected' }}>{{$customer->name}}</option>
                     @endforeach
                  </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Account Number</label>
                  <input type="text" class="form-control" name="accountno" value="{{$banjaccounts->accountno}}" placeholder="Account Number" required="required">  
            </div>
            <div class="col-md-4 form-group">
                <label for="campus">Bank Name</label>                       
               <input type="text" class="form-control" name="bankname" value="{{$banjaccounts->bankname}}"placeholder="Bank Name" required="required">  
            </div>
            <div class="col-md-4 form-group">
                <label for="office">IFSC CODE </label>
               <input type="text" class="form-control" name="ifsc_code" value="{{$banjaccounts->ifsc_code}}" placeholder="IFSC CODE" required="required"> 
            </div>
             <div class="col-md-4 form-group">
                <label for="office">Account Holder</label>
               <input type="text" class="form-control" name="acholder" value="{{$banjaccounts->acholder}}" placeholder="Account Holder" required="required"> 
            </div>
          
            <div class="col-md-4 form-group">
                <label for="make">Paytm Number</label>                 
                <input type="text" class="form-control" name="paytmno" value="{{$banjaccounts->paytmno}}" placeholder="Paytm Number">  
            </div>
             <div class="col-md-4 form-group">
                <label for="make">Gpay Number</label>                 
                <input type="text" class="form-control" name="googlepayno" value="{{$banjaccounts->googlepayno}}" placeholder="Gpay Number">  
            </div>
             <div class="col-md-4 form-group">
                <label for="make">PhonePe Number</label>                 
                <input type="text" class="form-control" name="phonepayno" value="{{$banjaccounts->phonepayno}}" placeholder="PhonePe Number">  
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
           
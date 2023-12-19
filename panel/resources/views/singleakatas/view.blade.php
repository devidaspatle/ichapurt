@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   View Single Bid History
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Single Bid History   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">

    
   
    <div class="box-body" style="height:100%">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    </ul>
    </div><br />
    @endif
         <div class="mt-2 mb-3" style="padding: 20px;">
         <div class="row  justify-content-start align-items-start">
            
            <div class="col-md-4 form-group">
                <label for="location">Customer Id</label>
                <input type="text" class="form-control text-green bold" style="font-weight: bold;" name="category_name" value="{{ $singleakatas->customerId}}" required="required"> 
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Category Name</label>
                <input type="text" class="form-control text-green bold" style="font-weight: bold;" name="category_name" value="{{ $singleakatas->category_name}}" required="required"> 
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Akata00</label>
              <input type="text" class="form-control text-green bold" style="font-weight: bold;" name="akata01" value="{{ $singleakatas->akata01}}" required="required">       
            </div>
            
    
           </div>
       <table style="width:100%">
                        <tr style="color: black">
                          
                           <td colspan="10" style="text-align: right;">  <a href="{{ route('singleakatas.index') }}"> <button type="button" class="btn btn-success btn-lg mb-1">Back</button></a></td>
                        </tr>
                        <tr style="color: black">
                           <td colspan="10">&nbsp;</td>
                        </tr>
                        <tr style="color: black">
                           <td>00</td>
                           <td>01</td>
                           <td>02</td>
                           <td>03</td>
                           <td>04</td>
                           <td>05</td>
                           <td>06</td>
                           <td>07</td>
                           <td>08</td>
                           <td>09</td>
                           
                        </tr>
                        <tr>
                           
                           <td><input type="Number" name="akata00" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata01}}"  min="11" /></td>
                           <td><input type="Number" name="akata10" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata02}}"  min="11" /></td>
                           <td><input type="Number" name="akata20" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata03}}"  min="11" /></td>
                           <td><input type="Number" name="akata30" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata04}}"  min="11" /></td>
                           <td><input type="Number" name="akata40" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata05}}"  min="11" /></td>
                           <td><input type="Number" name="akata01" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata06}}"  min="11" /></td>
                           <td><input type="Number" name="akata11" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata07}}"  min="11" /></td>
                           <td><input type="Number" name="akata21" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata08}}"  min="11" /></td>
                           <td><input type="Number" name="akata31" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata09}}"  min="11" /></td>
                           <td><input type="Number" name="akata41" class="form-control text-green bold" style="font-weight: bold;" readonly value="{{$singleakatas->akata10}}"  min="11" /></td>
                        </tr>
                        
                     </table>
        
           </div>
</div>
      </section>
            <!-- /.content -->
            </div>
        
@include('layouts.footer')
           
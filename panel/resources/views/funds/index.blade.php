@include('layouts.header')


        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Manage Fund    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Manage Fund     </li>
                 
                </ol>
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
            <form action="{{ route('funds.store') }}" method="POST">
              {{ csrf_field() }}
      
            <div class="mb-3 row text-center" >
                <label for="title" class="col-sm-2 col-form-label">Add Funds</label>
                <div class="col-sm-2">
                <input type="text" id="point" name="point" value="" class="form-control">
               
                </div>
                 <div class="col-sm-3">
                  
                     <select class="form-control" name="customerid" required="">
                        <option disabled="" selected="true">-- Select  Customer--</option>
                         @foreach($customers as $customer)
                        <option value="{{ $customer->name }}({{ $customer->custpmerid }})">{{ $customer->name }}({{ $customer->custpmerid }})</option>
                        @endforeach
                    </select>
                </div> 

               <div class="col-sm-2">
                <button class="btn button--effect-1" type="submit" name="add_submit">Submit </button>
             
            </div>   
            </div>
      </form>
        </div>
                                                 
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                     <th>Customer Name/Customer Id</th>
                     <th>Point</th>
                    
                    <th>Create Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($funds as $row)
                    <tr>
                        <td>{{ $i++ }}</td> 
                        <td>{{ $row->customerid }}</td>         
                        <td>{{ $row->point }}</td>
                        
                        <td>{{ $row->created_at }}</td>
                    <th class="text-center">  <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-danger" type="button"><i class="fa fa-edit"></i></button></th>
                  
                </tr>
                @endforeach
            </tfoot> 
        </table>
        
</div>

         </section>
            <!-- /.content -->
            </div>
        
@include('layouts.footer')
           
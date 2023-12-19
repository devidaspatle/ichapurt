@include('layouts.header')


        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   Wallets Balance
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Wallets Balance </li>
                 
                </ol>
            </section>
            <div>&nbsp;</div>
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
        <div class="mt-4 mb-4">
           <form action="{{ route('walletsbals.store') }}" method="POST">
                    {{ csrf_field() }}
                  
                        <div class="mb-4 row text-center" >
                        <label for="title" class="col-sm-2 col-form-label">Select Customer Name</label>
                            <div class="col-sm-3">
                            <select id="customerId" class="form-control" name="customerId" required="required">
                            <option value="" selected="selected">Select Full Name</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->custpmerid}}">{{$customer->name}}</option>
                            @endforeach
                        </select>
                            </div>

                            <label for="title" class="col-sm-2 col-form-label">Enter Point </label>
                            <div class="col-sm-2">
                            <input type="text" id="point" name="point" value="" class="form-control">
                            </div>
                           
                           <div class="col-sm-2">
                            <button class="btn button--effect-1" type="submit" name="add_submit">Submit </button>
                         
                        </div>   
                        </div>
      </form>
      
        </div>
        <div>&nbsp;</div>                                      
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Customer Name</th>
                    <th>Point</th>
                    <th>Create Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($walletsbals as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerId }}</td>
                        <td>{{ $row->point }}</td>
                        <td>{{ $row->created_at }}</td>
                    <th class="text-center"> <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-danger" type="button"><i class="fa fa-edit"></i></button></th>
                  
                </tr>
                @endforeach
            </tfoot> 
        </table>
        
</div>

         </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- /.content-wrapper -->
@include('layouts.footer')
           
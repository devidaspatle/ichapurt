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
                    <li><a href="Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Fund Requests</li>
                 
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
           <form action="{{ route('fundrequests.store') }}" method="POST">
                    {{ csrf_field() }}
                    <input type="hidden" id="currentStatus" name="currentStatus" value="Request" class="form-control">
                        <div class="mb-4 row text-center" >
                        <label for="title" class="col-sm-2 col-form-label">Select Customer Name</label>
                            <div class="col-sm-3">
                            <select id="customerId" class="form-control" name="customerId" required="required">
                            <option value="" selected="selected">Select Full Name</option>
                            @foreach($customers as $customer)
                            <option value="{{$customer->name}}">{{$customer->name}}</option>
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
                    <th>Request Point</th>
                    <th>Paid Point</th>
                    <th>Create Date</th>
                    <th>Paid Date</th>
                    <th>Status</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($fundrequests as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerId }}</td>
                        <td>{{ $row->point }}</td>
                        <td>{{ $row->pay_point }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td>{{ $row->updated_at }}</td>
                        <td>{{ $row->currentStatus }}</td>
                        <td style="width:8%"><div style="float:left"><a href="{{ route('fundrequests.edit',$row->id)}}" onclick="return confirm('Are you sure to Pay?')"><i class="fa fa-edit" style="font-size:22px"></i></a> </div>&nbsp; 
                  
                    </td>
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
           
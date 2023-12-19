@include('layouts.header')


        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Win History    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Win History  </li>
                 
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
            <form action="{{ route('walletsbals.store') }}" method="POST">
                    {{ csrf_field() }}
                  
                        <div class="mb-3 row text-center" >
                            <label for="title" class="col-sm-2 col-form-label">Enter Point to Withdraw</label>
                            <div class="col-sm-3">
                            <input type="text" id="name" name="name" value="" class="form-control">
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
                    <th>Customer Name</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Create Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($winhistorys as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerId }}</td>
                        <td>{{ $row->start_date }}</td>
                        <td>{{ $row->end_date }}</td>
                        <td>{{ $row->created_at }}</td>
                    <th class="text-center"> <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-danger" type="button"><i class="fa fa-trash"></i></button>  <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-danger" type="button"><i class="fa fa-edit"></i></button></th>
                  
                </tr>
                @endforeach
            </tfoot> 
        </table>
        
</div>

       </section>
            <!-- /.content -->
            </div>
         
@include('layouts.footer')
           
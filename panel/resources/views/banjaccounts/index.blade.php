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
        <div class="mt-2 mb-3">
            <a href="{{ route('banjaccounts.create') }}" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add Bank Details</a>
            <button type="button" onclick="reload_ajax()" class="btn btn-sm bg-maroon btn-flat btn-default"><i class="fa fa-refresh"></i> Reload</button>
            
        </div>
           <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Customer Name</th>
                    <th>Acoount No</th>
                    <th>Bank Name</th>
                    <th>IFSC Code</th>
                    <th>Account Holder</th>
                    <th>Create Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($banjaccounts as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerid }}</td>
                        <td>{{ $row->accountno }}</td>
                        <td>{{ $row->bankname }}</td>
                        <td>{{ $row->ifsc_code }}</td>
                        <td>{{ $row->acholder }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td style="width:8%"><div style="float:left"><a href="{{ route('banjaccounts.edit',$row->id)}}" onclick="return confirm('Are you sure to Edit?')"><i class="fa fa-edit" style="font-size:22px"></i></a> </div>&nbsp; 
                        
                    </td>
                </tr>
                @endforeach
            </tfoot> 
        </table>
           </div>
</div>

       </section>
            <!-- /.content -->
            </div>
            <!-- /.content-wrapper -->
            <!-- /.content-wrapper -->
@include('layouts.footer')
           
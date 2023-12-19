@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   Game Rate
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Game Rate </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title">Game Rate</h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body">
        <div class="mt-2 mb-3">
            <a href="" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add Data</a>
            <button type="button" onclick="reload_ajax()" class="btn btn-sm bg-maroon btn-flat btn-default"><i class="fa fa-refresh"></i> Reload</button>
            
        </div>
           <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Customer Name</th>
                    <th>Game Name</th>
                    <th>Rates</th>
                    <th>Create Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($gamerates as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerid }}</td>
                        <td>{{ $row->gamename }}</td>
                        <td>{{ $row->rates }}</td>
                        <td>{{ $row->created_at }}</td>
                    <th class="text-center"> <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-danger" type="button"><i class="fa fa-trash"></i></button>  <button onclick="bulk_delete()" class="btn btn-sm btn-flat btn-primary" type="button"><i class="fa fa-edit"></i></button></th>
                  
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
           
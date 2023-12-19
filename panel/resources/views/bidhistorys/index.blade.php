@include('layouts.header')


        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Bid History    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Bid History  </li>
                 
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
       
                                                 
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Customer Name</th>
                    <th>Created Date</th>
                     <th>Single Akata</th>
                    <th>Jodi</th>
                    <th>Patti</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($bidhistorys as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerId }}</td>
                        <td>{{ $row->created_at }}</td>
                       <td><a href="view_single_bidhistory.php?bidid={{$row->id}}">Single Akata</a></td>
                        <td><a href="view_jodi_bidhistory.php?bidid={{$row->id}}">Jodi</a></td>
                        <td><a href="view_patti_bidhistory.php?bidid={{$row->id}}">Patti</a></td>
                       
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
           
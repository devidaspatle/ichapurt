@include('layouts.header')


        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   Manage Win History    
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
            <form action="{{ route('winhistorys.store') }}" method="POST">
        {{ csrf_field() }}
      
            <div class="mb-3 row text-center" >
                <label for="title" class="col-sm-2 col-form-label">Start Date</label>
                <div class="col-sm-3">
                <input type="text" id="start_date" name="start_date" value="" class="form-control">
                </div>
                <label for="title" class="col-sm-2 col-form-label">End Date</label>
                <div class="col-sm-3">
                <input type="text" id="end_date" name="end_date" value="" class="form-control">
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
                    <th>Created Date</th>
                    <th>Single Akata</th>
                    <th>Jodi</th>
                    <th>Patti</th>
                
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($winhistorys as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerId }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td><a href="#">Single Akata</a></td>
                        <td><a href="#">Jodi</a></td>
                        <td><a href="#">Patti</a></td>
                       
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
           
@include('layouts.header')


        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   Customer List   
                </h1>
                <ol class="breadcrumb">
                    <li><a href="Home"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Customer List    </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
  
    <div class="box-body">
        <div class="mt-2 mb-3">
            <a href="{{route('customers.create')}}" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add Customer</a>
          
        </div>
        <form name="frm" action="">
          <div class="row text-center"> <div class="col-md-2">&nbsp;</div> <div class="col-md-2">Customer Name   :   </div><div class="col-md-3"><input class="form-control" id="name" name="name" type="text" placeholder="Search.."></div>  <div class="col-md-2"> <input class="form-control" type="submit" name="Submit" value="Search">   </div> </div>                               
        </form>
        <div class="row">&nbsp;</div>
         <table class="table table-bordered" id="myTable" width="100%" cellspacing="0">
            <thead>
                <tr>
                    <th>Sr. No.</th>
                    <th>Customer Name</th>
                    <!--<th>Email Id</th>-->
                    <th>Mobile</th>
                    <th>Customer Id</th>
                    <th>Password</th>
                    <th>Create Date</th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
           <tfoot>

                <?php $i =1; ?>
                    @foreach($customers as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->name }}</td>
                        <!--<td>{{ $row->email }}</td>-->
                        <td>{{ $row->mobile }}</td>
                        <td>{{ $row->custpmerid }}</td>
                         <td>{{ $row->password }}</td>
                        <td>{{ $row->created_at }}</td>
                      
                        <td style="width:8%"><div style="float:left"><a href="{{ route('customers.edit',$row->id)}}" onclick="return confirm('Are you sure to Edit?')"><i class="fa fa-edit" style="font-size:22px"></i></a> </div>&nbsp; 
                    <div style="float:right"> <form action="{{ route('customers.destroy', $row->id)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit" onclick="return confirm('Are you sure to delete?')"><i class="fa fa-trash" style="font-size:18px"></i></button>
                </form></div>
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
  
           
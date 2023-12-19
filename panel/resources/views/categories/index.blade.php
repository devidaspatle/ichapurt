@include('layouts.header')
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   Category Name    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Category</li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    
    <div class="box-body">
        <!-- <div class="mt-2 mb-3">
            <a href="{{route('categories.create')}}" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add Category</a>
           
        </div> -->
        <form action="" id="bulk" method="post" accept-charset="utf-8">
                                                                    
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Category Name</th>
                    <th>Opening Time</th>
                    <th>CLosing Time</th>
                    <th>Date </th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tfoot>
                 <?php $i =1; ?>
                    @foreach($categories as $row)
                <tr>
                    <td>{{ $i++ }}</td>          
                    <td>{{ $row->catName }}</td>
                    <td>{{ $row->catTime }}</td>
                    <td>{{ $row->catoutTime }}</td>
                    <td>{{ $row->created_at }}</td>
                    <td style="width:8%"><div style="float:left"><a href="{{ route('categories.edit',$row->id)}}" onclick="return confirm('Are you sure to Edit?')"><i class="fa fa-edit" style="font-size:22px"></i></a> </div>&nbsp; 
                    <div style="float:right"> <form action="{{ route('categories.destroy', $row->id)}}" method="post">
                  
                    </td>
                </tr>
                @endforeach
            </tfoot> 
        </table>
        </form>    </div>
</div>
</section>
            <!-- /.content -->
            </div>
@include('layouts.footer')
           
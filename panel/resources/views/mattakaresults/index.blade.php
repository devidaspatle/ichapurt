@include('layouts.header')
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   Mattka Results    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Mattka Results  </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    
    <div class="box-body">
         <div class="mt-2 mb-3">
            <a href="{{route('mattakaresults.create')}}" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add Result</a>
           
        </div>
        <form action="" id="bulk" method="post" accept-charset="utf-8">
                                                                    
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Category Name</th>
                    <th>Single Akata</th>
                    <th>Jodi</th>
                    <th>Patti</th>
                    <th>Mattka Number</th>
                    <th>Type</th>
                    <th>Date </th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tfoot>

                 <?php $i =1; ?>
                    @foreach($mattakaresults as $row)
                <tr>
                    <td>{{ $i++ }}</td>          
                    <td>{{ $row->category_name }}</td>
                    <td>{{ $row->single_akata }}</td>
                    <td>{{ $row->jodi }}</td>
                    <td>{{ $row->double_pati }}</td>
                    <td>{{ $row->mattaka_number }}</td>
                     <td><?php if($row->mattaka_time==1) {echo "Close";} ?><?php if($row->mattaka_time==0) {echo "Open";} ?></td>
                     
                    <td>{{ $row->created_at }}</td>
                    <td style="width:8%"><div style="float:left"><a href="{{ route('mattakaresults.edit',$row->id)}}" onclick="return confirm('Are you sure to Edit?')"><i class="fa fa-edit" style="font-size:22px"></i></a> </div>&nbsp; 
                  
                  
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
           
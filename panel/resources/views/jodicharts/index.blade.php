@include('layouts.header')
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                   Jodi Chart Results    
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">Jodi Chart Results  </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    
    <div class="box-body">
         <div class="mt-2 mb-3">
            <a href="{{route('jodicharts.create')}}" class="btn btn-sm btn-flat bg-blue"><i class="fa fa-plus"></i> Add Jodi Chart Results</a>
           
        </div>
        <form action="" id="bulk" method="post" accept-charset="utf-8">
                                                                    
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Mattka Type </th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday </th>
                    <th>Thuersday</th>
                    <th>Friday </th>
                    <th>Saturday </th>
                    <th>Mattka Date </th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tfoot>

                 <?php $i =1; ?>
                    @foreach($jodicharts as $row)
                <tr>
                    <td>{{ $i++ }}</td>          
                    <td>{{ $row->mattka_type }}</td>
                  
                    <td>{{ $row->mond }}</td>
                   
                    <td>{{ $row->tuesd }}</td>
                   
                    <td>{{ $row->wedn }}</td>
                   
                    <td>{{ $row->thusd }}</td>
                   
                    <td>{{ $row->frid }}</td>
                  
                    <td>{{ $row->satus }}</td>
                   
                    <!--<td>{{ $row->tuesd }}</td>-->
                    <!--<td>{{ $row->wedn }}</td>-->
                    <!--<td>{{ $row->thusd }}</td>-->
                    <!--<td>{{ $row->frid }}</td>-->
                    <!--<td>{{ $row->satus }}</td>-->
                    <td>{{ $row->mattaka_date }}</td>
                    <td style="width:8%"><div style="float:left"><a href="{{ route('jodicharts.edit',$row->id)}}" onclick="return confirm('Are you sure to Edit?')"><i class="fa fa-edit" style="font-size:22px"></i></a> </div>&nbsp; 
                  
                  
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
           
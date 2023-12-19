@include('layouts.header')
<body class="hold-transition skin-green sidebar-mini">
    <div class="wrapper">

@include('layouts.sidebar');
@php
echo $category_name=\request()->segment(3);
$bit_date=\request()->segment(2);
@endphp
      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                  Jodi Report Bid History 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active">  Jodi Report Bid History </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    
    <div class="box-body">
           
        <form name="frm" action="" >
          <div class="row text-center"> <div class="col-md-2">Category Name </div><div class="col-md-3"> 
                <select id="category_name" class="form-control" name="category_name" required="required">
                     <option value="" >Select Category</option>
                     <option value="ichaapurti_morning_jodi">ichaapurti_morning_jodi</option>
                     <option value="prabhat_jodi">prabhat_jodi</option>
                     <option value="ichaapurti_day_jodi">ichaapurti_day_jodi</option>
                     <option value="kalyan_jodi">kalyan_jodi</option>
                     <option value="rajdhani-night_jodi">ichaapurti-night-jodi</option>
                     <option value="rajdhani-night-jodi">rajdhani-night-jodi</option>
                      <option value="main_bazar_jodi">main_bazar</option>
                  </select>
                  </div> <div class="col-md-2">Date:   </div><div class="col-md-3"><input class="form-control" id="date" name="date" type="date"></div>
                  <div class="col-md-2"> <input type="submit" name="Submit" value="Search" class="btn btn-sm btn-flat bg-blue">   </div> </div>                               
        </form>
        <div class="row">&nbsp;</div>
        <div class="mt-2 mb-3"  aligb="center">
           <a href="export_jodi_bidhistory.php?catgorid=@php echo $category_name;@endphp&&bitdate=@php echo $bit_date;@endphp" class="btn btn-sm btn-flat bg-blue" onclick="return confirm('Are you sure to export data?')"><i class="fa fa-plus"></i> Download Excel</a>
           
        </div>
                                                                    
         <form action="" id="bulk" method="post" accept-charset="utf-8">
                                                                    
        <table id="kelasdosen" class="w-100 table table-striped table-bordered table-hover">
            <thead>
                <tr>
                    <th>Sr. No</th>
                    <th>Customer Id</th>
                    <th>Category Name</th>
                    <th> Akata01</th>
                    <th>Akata02</th>
                    <th>Akata03</th>
                    <th>Akata04</th>
                    <th>Akata05</th>
                    <th>Date </th>
                    <th class="text-center">Action</th>
                </tr>
            </thead>
            <tfoot>
                <?php $i =1; ?>
                    @foreach($jodis as $row)
                    <tr>
                        <td>{{ $i++ }}</td>          
                        <td>{{ $row->customerId }}</td>
                        <td>{{ $row->category_name }}</td>
                        <td>{{ $row->akata01 }}</td>
                        <td>{{ $row->akata02 }}</td>
                        <td>{{ $row->akata03 }}</td>
                        <td>{{ $row->akata04 }}</td>
                        <td>{{ $row->akata05 }}</td>
                        <td>{{ $row->created_at }}</td>
                        <td style="text-align: center;"><a href="{{ route('jodis.show',$row->id)}}" onclick="return confirm('Are you sure to View?')"><i class="fa fa-eye" style="font-size:22px"></i></a></td>
                </tr>
                @endforeach
            </tfoot> 
        </table>
        </form>
           </div>
</div>
</section>
            <!-- /.content -->
            </div>
@include('layouts.footer')
           
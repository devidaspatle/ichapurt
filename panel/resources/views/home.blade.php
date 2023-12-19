@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Dashboard                   <small></small>
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                  
                    <li class="active">Application Data</li>
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">

<div class="serviceBox" style="color:#000; padding: 10px;">
            <h3  style="line-height: 30px; color: red"> Mattka Results  </h3>     
           
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
@include('layouts.footer')
           
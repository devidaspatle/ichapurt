@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')
<?php

function saveProfile(){
    $firstname = $this->input->post('firstname');
    $lastname = $this->input->post('lastname');
    $post_data = array('firstname'=> $firstname,'lastname'=>$lastname);
    $this->db->insert('posts',$post_data);
    return $this->db->insert_id(); 
}
?>
      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Create Jodi Chart  Result 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Create Result   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> Create Jodi Chart Result  </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body" style="height:100%">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
     <form action="{{ route('jodicharts.store') }}" method="post">
        {{ csrf_field() }}
        <input type="hidden" value="{{ ucwords(Auth::user()->name) }}" id="user" name="user">
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-3 form-group">
                <label for="location">Mattka Name</label>
                <select id="mattka_type" class="form-control" name="mattka_type" required="required">
                     <option value="" selected="selected">Select Mattka Name</option>
                     @foreach($categories as $categoris)
                     <option value="{{$categoris->catNumber}}">{{$categoris->catName}}</option>
                     @endforeach
                  </select>
            </div>
            <div class="col-md-3 form-group">
                <label for="location">Mattaka Time </label>
                  <label for="location">Day  Name</label>
                  <select id="day_name" class="form-control" name="day_name" required="required">
                     <option value="" selected="selected">Select Day  Name</option>
                     <option value="Monday">Monday</option>
                     <option value="Tuesday">Tuesday</option>
                     <option value="Wednesday">Wednesday</option>
                     <option value="Thuersday">Thuersday</option>
                     <option value="Friday">Friday</option>
                     <option value="Saturday">Saturday</option>
                  </select>
            </div>
             <div class="col-md-3 form-group">
                <label for="location">Mattka Date</label>
                  <input type="date" class="form-control" name="mattaka_date" placeholder="Mattka Date" value="" required="required">  
            </div>
            <div class="col-md-3 form-group">
                <label for="location">Jodi Number</label>
                  <input type="text" class="form-control" name="jodi" placeholder="Jodi Number" value="" required="required">  
            </div>
        </div>        
        <div class="ms-auto pageheader-btn mt-3">
               <button class="btn button--effect-1" type="submit" name="Submit"> <i class="fa fa-paper-plane"></i> Submit </button> 
        </div>
      </form>
           </div>
           </div>
</div>
      </section>
            <!-- /.content -->
            </div>
        
@include('layouts.footer')
           
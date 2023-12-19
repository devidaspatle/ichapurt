@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Edit Jodi Chart 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Edit Jodi Chart   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">
    <div class="box-header with-border">
        <h3 class="box-title"> Edit Jodi Chart  </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
    </div>
    <div class="box-body" style="height:100%">
    @if ($errors->any())
    <div class="alert alert-danger">
    <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
    </ul>
    </div><br />
    @endif
         <div class="mt-2 mb-3" style="padding: 20px;">
         <form method="post" action="{{ route('jodicharts.update', $jodicharts->id) }}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
        <input type="hidden" value=" {{ ucwords(Auth::user()->name) }}" id="user" name="user">
        <div class="row  justify-content-start align-items-start">
           <div class="col-md-2 form-group">
                <label for="location">Monday</label>
                {{$jodicharts->mond}}
            </div>
            <div class="col-md-2 form-group">
                <label for="location">Tuesday</label>
               {{$jodicharts->tuesd}} 
            </div>
            <div class="col-md-2 form-group">
                <label for="location">Wednesday</label>
                {{$jodicharts->wedn}} 
            </div>
            <div class="col-md-2 form-group">
                <label for="location">Thuersday</label>
                {{$jodicharts->thusd}}  
            </div>
            <div class="col-md-2 form-group">
                <label for="location">Friday</label>
                 {{$jodicharts->frid}}
            </div>
            <div class="col-md-2 form-group">
                <label for="location">Saturday</label>
                {{$jodicharts->satus}}
            </div>
            </div>
         <div class="row  justify-content-start align-items-start">
           <div class="col-md-3 form-group">
                <label for="location">Mattka Name</label>
                <input type="text" class="form-control" name="mattaka_date" placeholder="Mattka Date" value="{{$jodicharts->mattka_type}}" required="required">  
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
           
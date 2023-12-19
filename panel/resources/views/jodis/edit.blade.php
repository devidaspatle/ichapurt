@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Edit Result 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Edit Result   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">

    
    <div class="box-header with-border">
        <h3 class="box-title"> Edit Result  </h3>
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
         <form method="post" action="{{ route('mattakaresults.update', $mattakaresults->id) }}" enctype="multipart/form-data">
    @method('PATCH')
    @csrf
        <input type="hidden" value=" {{ ucwords(Auth::user()->name) }}" id="user" name="user">
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-4 form-group">
                <label for="location">Category Name</label>
                <select id="category_name" class="form-control" name="category_name">
                     <option value="" selected="selected">Select Category</option>
                     @foreach($categories as $categoris)
                     <option value="{{$categoris->catNumber}}" {{ ( $categoris->catNumber == $mattakaresults->category_name) ? 'selected' : 'selected' }}>{{$categoris->catName}}</option>
                     @endforeach
                  </select>
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Mattaka Time </label>
                   <select id="mattaka_time" class="form-control" name="mattaka_time"  required="required">
                     <option value="" selected="selected">Select Mattaka Time</option>
                     <option value="0">Open</option>
                     <option value="1">Close</option>
                  </select> 
            </div>
            <div class="col-md-4 form-group">
                <label for="location">Single Akata Number </label>
                  <input type="text" class="form-control" name="single_akata" placeholder="Single Akata Number" value="{{ $mattakaresults->single_akata}}" required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Jodi Number</label>
                  <input type="text" class="form-control" name="jodi" placeholder="Jodi Number" value="{{ $mattakaresults->jodi}}" required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Patti Number </label>
                  <input type="text" class="form-control" name="double_pati" placeholder="Patti Number " value="{{ $mattakaresults->double_pati}}" required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Mattaka Number</label>
                  <input type="text" class="form-control" name="mattaka_number" placeholder="Mattaka Number" value="{{ $mattakaresults->mattaka_number}}" required="required">  
            </div>
          
        </div>        
        <div class="ms-auto pageheader-btn mt-3">
               <button class="btn button--effect-1" type="submit" name="add_submit"> <i class="fa fa-paper-plane"></i> Submit </button> 
        </div>
      </form>
           </div>
           </div>
</div>
      </section>
            <!-- /.content -->
            </div>
        
@include('layouts.footer')
           
@include('layouts.header')

        <!-- Sidebar -->
        <!-- Left side column. contains the logo and sidebar -->
@include('layouts.sidebar')

      <!-- /.sidebar -->
      <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <section class="content-header">
                <h1>
                    Edit Category 
                </h1>
                <ol class="breadcrumb">
                    <li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
                    <li class="active"> Edit Category   </li>
                 
                </ol>
            </section>
            <!-- Main content -->
            <section class="content container-fluid">
<div class="box">

    <div class="box-header with-border">
        <h3 class="box-title"> Edit Category  </h3>
        <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
            </button>
        </div>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
        </ul>
        </div><br />
        @endif
    </div>
    <div class="box-body">
        
         <div class="mt-2 mb-3" style="padding: 20px;">
       
        <form method="post" action="{{ route('categories.update', $categories->id) }}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
        <input type="hidden" value=" {{ ucwords(Auth::user()->name) }}" id="c_created_by" name="c_created_by">
        <div class="row  justify-content-start align-items-start">
            <div class="col-md-6 form-group">
                <label for="location">Opening Time</label>
                  <input type="text" class="form-control" name="catTime"  value="{{ $categories->catTime }}"  placeholder="Opening Time"  required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Closing Time </label>
                  <input type="text" class="form-control" name="catoutTime" value="{{ $categories->catoutTime }}"  placeholder="Closing Time"required="required">  
            </div>
            <div class="col-md-6 form-group">
                <label for="location">Category Name</label>
                  <input type="text" class="form-control" name="catName" value="{{ $categories->catName }}"  placeholder="Category Name" readonly  required="required">  
            </div>
        </div>        
        <div class="ms-auto pageheader-btn mt-3">
               <button class="btn button--effect-1" type="submit" name="add_submit"> <i class="fa fa-paper-plane"></i> Submit </button> 
        </div>
      </form>
      </div>
</div>
</section>
            <!-- /.content -->
            </div>
            </div>
@include('layouts.footer')
           
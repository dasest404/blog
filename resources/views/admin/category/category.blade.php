@extends('admin.layouts.app')

@section('content')



<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Categories page
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Category</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            
          <div class="box box-primary"> 
            <div class="box-header with-border">
              <h3 class="box-title">Categories</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="" action="" name="">
              <div class="box-body">
                  <div class="row"> 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="name">Category title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                          <label for="slug">Slug</label>
                          <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                        </div> 
                      </div>
                </div>
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>

        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection


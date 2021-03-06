@extends('admin.layouts.app')

@section('content')
    
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Post page
        <small>Advanced form element</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Posts</a></li>
        
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
            
          <div class="box box-primary"> 
            <div class="box-header with-border">
              <h3 class="box-title">Titles</h3>
            </div>
            <!-- /.box-header -->
            <!-- form start -->
            <form role="form" method="" action="" name="">
              <div class="box-body">
                  <div class="row"> 
                      <div class="col-md-6">
                        <div class="form-group">
                          <label for="title">Post title</label>
                          <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
                        </div>

                        <div class="form-group">
                          <label for="subtitle">Post sub title</label>
                          <input type="text" class="form-control" id="subtitle" name="subtitle" placeholder="Enter Subtitle">
                        </div>

                        <div class="form-group">
                          <label for="slug">Slug</label>
                          <input type="text" class="form-control" id="slug" name="slug" placeholder="Enter Slug">
                        </div> 
                      </div>
                      <div class="col-lg-6">
                        <div class="form-group">
                          <label for="exampleInputFile" name="image" id="image">File input</label>
                          <input type="file" id="exampleInputFile">
                        </div>
                          <br>
                          <br>
                        <div class="checkbox" >
                          <label>
                            <input type="checkbox" name="status">Publish
                          </label>
                        </div>
                      </div>
                </div>
                  
                <div class="box">
                    <div class="box-header">
                      <h3 class="box-title">Bootstrap WYSIHTML5
                        <small>Simple and fast</small>
                      </h3>
                      <!-- tools box -->
                      <div class="pull-right box-tools">
                        <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                title="Collapse">
                          <i class="fa fa-minus"></i></button>
                      </div>
                      <!-- /. tools -->
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body pad">
                      <form>
                        <textarea class="textarea" placeholder="Place some text here" name="body"
                                  style="width: 100%; height: 300px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                      </form>
                    </div>
                </div>  
                  
                  
              </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>
          </div>
          <!-- /.box -->
            
            
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Bootstrap WYSIHTML5
                <small>Simple and fast</small>
              </h3>
              <!-- tools box -->
              <div class="pull-right box-tools">
                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                  <i class="fa fa-minus"></i></button>
              </div>
              <!-- /. tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body pad">
              <form>
                <textarea class="textarea" placeholder="Place some text here"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
              </form>
            </div>
          </div>
        </div>
        <!-- /.col-->
      </div>
      <!-- ./row -->
    </section>
    <!-- /.content -->
  </div>
@endsection


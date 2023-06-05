<?php $this->load->view('admin/head') ?>


<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Starter Page</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Starter Page</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            

            <div class="card card-primary card-outline">
              <div class="card-header bg-primary">
                <h3 class="m-0">Add services</h3>
                <!-- <a href="<?php echo base_url('welcome/services_list') ?>" class="btn btn-danger btn-xl" style="margin-left:89%">Service_list</a> -->
              </div>
              <div class="card-body">
              <form action="<?php echo base_url('Welcome/serve') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Title</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" placeholder="Enter Title " >
                    </div>
               
                    
                    <div class="form-group">
                        <label for="exampleInputPassword1">Details</label>
                        <textarea class="summernote" name="details"></textarea>
                    </div>
                    </div>
                    <div class="col-6">
                    
                    <div class="form-group">
                      <label for="exampleInputFile">icon</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="icon" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                           
                    <div class="form-group">
                      <label for="exampleInputFile">Photo</label>
                      <div class="input-group">
                        <div class="custom-file">
                          <input type="file" name="photo" class="custom-file-input" id="exampleInputFile">
                          <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                        </div>
                        <div class="input-group-append">
                          <span class="input-group-text">Upload</span>
                        </div>
                      </div>
                    </div>
                    <div class="form-group">
                          <label for="exampleInputEmail1"></label>
                          <input type="submit" class="btn btn-primary btn-block" value="Save">
                      </div>
                   
                  </div>
                 
              </div>
                  
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  
                </div>
              </form>
              </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
          
        </div>
        <!-- /.row -->
            <!-- /.content-header -->
    <div class="card card-primary card-outline">
              <div class="card-header bg-primary">
                <h4 class="m-0">Service List</h4>
             
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>Title</th>
                        <th>Details</th>
                        <th>Icon</th>
                        <th>photo</th>
                        
                    </tr>
                    <?php foreach ($ser_list as $k => $v) { ?>
                        <tr>
                            <td><?php echo $k+1 ?></td>
                            <td><?php echo $v->title ?></td>
                            <td><?php echo $v->details ?></td>
                       
                            <td><img src="<?php echo base_url('upload_something/'.$v->icon); ?>" width="100" height="80"/></td>

                            <td><img src="<?php echo base_url('upload_something/'.$v->photo); ?>" width="100" height="80"/></td>
                                                      
<td>

    <a href="<?php echo base_url('Welcome/services_edit/'.$v->id) ?>" class="btn btn-success btn-xs"> <i class="fa fa-edit" style="color:white;"></i>
</a>
    <a href="<?php echo base_url('Welcome/services_delete/'.$v->id) ?>" class="btn btn-danger btn-xs" onclick="return confirm('Are You Sure?')">
    <i class="fa fa-trash-o" style="color:white"></i>
</a>
    
</td>
                        </tr>
                    <?php } ?>
                </table>
              </div>
            </div>
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->
        <?php $this->load->view('admin/foot') ?>
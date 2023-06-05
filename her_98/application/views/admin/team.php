  <!-- Content Wrapper. Contains page content -->
  
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
                <h3 class="m-0">Add new Team</h3>
              

              </div>
              <div class="card-body">
              <form action="<?php echo base_url('Welcome/tem_ad') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1">name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Profession</label>
                        <input type="text" name="profession" class="form-control" id="exampleInputEmail1" placeholder="Enter profession" >
                    </div>
                 
                    </div>
                    <div class="col-6">
                    
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

<div class="card card-primary card-outline">
              <div class="card-header bg-primary">
                <h4 class="m-0">Team List</h4>
               
              </div>
              <div class="card-body">
                <table class="table table-bordered">
                    <tr>
                        <th>SL</th>
                        <th>name</th>
                        <th>Profession</th>
                      
                    
                        <th>Photo</th>
                        <th>Action</th>
                    </tr>
                    <?php foreach ($tem as $k => $v) { ?>
                        <tr>
                            <td><?php echo $k+1 ?></td>
                            <td><?php echo $v-> name ?></td>
                            <td><?php echo $v->profession ?></td>
                        
                          
                            <td><img src="<?php echo base_url('upload_something/'.$v->photo); ?>" width="100" height="80"/></td>
                            <!-- <td><a href="" class="btn btn-success btn-xs">Edit</a></td>
                            <td><a href="delete_slider.php" class="btn btn-danger btn-xs">Delete</a></td> -->

                               <td>
    
                                <!-- <a href="team_edit.php?id=<?php echo $data['id'] ?>" class="btn btn-xs btn-success">
                                <i class="fa fa-edit" style="color:white;"></i>
                            </a>    -->
                            <a href="<?php echo base_url('Welcome/tem_del/'.$v->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')" >
              <i class="fa fa-trash-o" style="color:white"></i>
              <!-- onclick="return confirm('Are you sure?')" -->
          </a>
                            </td>
                        </tr>
                        <?php } ?>
                </table>
              </div>
            </div>
      </div>
      <!-- /.container-fluid -->
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
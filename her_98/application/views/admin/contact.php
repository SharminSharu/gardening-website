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
          </div>
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <div class="content">
    <!-- Main content -->
      <div class="container-fluid">
        <div class="row">
          <!-- /.col-md-6 -->
          <div class="col-lg-12">
            

            <div class="card card-primary card-outline">
              <div class="card-header bg-primary">
                <h3 class="m-0">Add Contact</h3>
                <!-- <a href=" <?php echo base_url('welcome/conlist') ?>" class="btn btn-danger btn-xl" style="margin-left:89%"> Contact_List</a> -->
              </div>
              <div class="card-body">

              <form action="<?php echo base_url('Welcome/ad_contact') ?>" method="post" enctype="multipart/form-data">
                <div class="card-body">
                <div class="row">
                <div class="col-6">
                    <div class="form-group">
                        <label for="exampleInputEmail1"> Name</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter name" >
                    </div>
                  
                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="text" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter Email ID" >
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Subject</label>
                        <input type="text" name="subject" class="form-control" id="exampleInputEmail1" placeholder="Enter subject" >
                    </div>
              
                    </div>
                    <div class="col-6">
                
                    <div class="form-group">
                        <label for="exampleInputPassword1">Message</label>
                        <textarea class="summernote" name="msg"></textarea>
                    </div>

                    </div>
                  </div>
                
                  <div class="form-group">
                        <label for="exampleInputEmail1"></label>
                        <input type="submit" class="btn btn-primary btn-block" value="Submit">
                    </div>
                </div>
            </div>
                  
                </div>

          <div class="card card-primary card-outline">
                <div class="card-header bg-primary">
                  <h4 class="m-0">Contact List</h4>
                  <!-- <a href=" <?php echo base_url('welcome/ad_contact') ?>"  class="btn btn-danger btn-xl" style="margin-left:89%">Add Contact</a> -->
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr>
                          <th>SL</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Subject</th>
                          <th>Message</th>
                       
                          <th>Action</th>
                      </tr>
                      <?php foreach ($con as $k => $v) { ?>
                          <tr>
                              <td><?php echo $page+$k+1 ?></td>
                              <td><?php echo $v->name ?></td>
                              <td><?php echo $v-> email ?></td>
                              <td><?php echo $v->subject ?></td>
                              <td><?php echo $v->msg ?></td>
                                                        
         <td>
      
              <a href="<?php echo base_url('welcome/ad_contact' .$v->id) ?>"class="btn btn-xs btn-success">
              <i class="fa fa-edit" style="color:white;"></i>
          </a>   

              <a href="<?php echo base_url('Welcome/delete/'.$v->id) ?>" class="btn btn-xs btn-danger" onclick="return confirm('Are you sure?')" >
              <i class="fa fa-trash-o" style="color:white"></i>
              <!-- onclick="return confirm('Are you sure?')" -->
          </a>
          </td>
                          </tr>
                      <?php } ?>
                  </table>
                  <?php echo $links ?>
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
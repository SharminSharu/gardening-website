<?php $this->load->view('admin/head') ?>
<?php $this->load->view('admin/menu') ?>
    
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

          <div class="card card-primary card-outline">
                <div class="card-header bg-primary">
                  <h4 class="m-0">Get Quotes list</h4>
                  <!-- <a href=" <?php echo base_url('welcome/ad_contact') ?>"  class="btn btn-danger btn-xl" style="margin-left:89%">Get Quotes list</a> -->
                </div>
                <div class="card-body">
                  <table class="table table-bordered">
                      <tr>
                          <th>SL</th>
                          <th>Name</th>
                          <th>Email</th>
                          <th>Mobile</th>
                          <th>Service Type</th>
                       
                          <th>Message</th>
                       
                          <th>Action</th>
                      </tr>
                      <?php foreach ($quo as $k => $v) { ?>
                          <tr>
                              <td><?php echo $k+1 ?></td>
                              <td><?php echo $v->name ?></td>
                              <td><?php echo $v-> email ?></td>
                              <td><?php echo $v->moblie ?></td>
                              <td><?php echo $v->service ?></td>
                              <td><?php echo $v->msg ?></td>
                                                        
         <td>
      
              <a href="<?php echo base_url('welcome/ad_quote' .$v->id) ?>"class="btn btn-xs btn-success">
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
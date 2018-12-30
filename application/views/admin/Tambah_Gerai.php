<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>GeraiAyam | Tambah Gerai</title>
  <?php $this->load->view('admin/include/style'); ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php $this->load->view('admin/include/navbar'); ?>

    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php $this->load->view('admin/include/sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-md-12 d-flex align-items-stretch grid-margin">
              <div class="row flex-grow">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                         <h4 class="card-title">Input Gerai</h4>
                         <?php echo form_open("Admin/prosestambahgerai", array('enctype'=>'multipart/form-data')); ?>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">User Name</label>
                                    <input type="text" class="form-control" name="NamaGerai" placeholder="Enter Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">email</label>
                                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Password</label>
                                    <input type="password" class="form-control" name="Pass" placeholder="Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Re-Password</label>
                                    <input type="password" class="form-control" name="Pass1" placeholder="Re Password">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Nomor Telepon</label>
                                    <input type="text" class="form-control" name="tlp" placeholder="Enter Nomor Telp">
                                </div>
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Lokasi</label>
                                    <input type="text" class="form-control" name="lokasi" placeholder="Enter Location">
                                </div>
                                <button type="submit" name="submit" value="upload" class="btn btn-success mr-2">Submit</button>
                                <button class="btn btn-light">Cancel</button>
                        <?php echo form_close(); ?>
                        </div>
                     </div>
                    </div>
                </div>
            </div>
          </div>
          <!-- content-wrapper ends -->
        </div>
        
        <!-- partial:../../partials/_footer.html -->
        <?php $this->load->view('admin/include/footer'); ?>
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->
 <?php $this->load->view('admin/include/script'); ?>
</body>

</html>
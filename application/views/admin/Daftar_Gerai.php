<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>GeraiAyam | Daftar Gerai</title>
  <?php $this->load->view('admin/include/style'); ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:../../partials/_navbar.html -->
    <?php $this->load->view('admin/include/navbar'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:../../partials/_sidebar.html -->
      <?php $this->load->view('admin/include/sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Daftar Gerai</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>User Name</th>
                            <th>Email</th>
                            <th>No Telepone</th>
                            <th>Lokasi</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($data as $Gerai){ ?>
                        <tr>
                            <td><?php echo $Gerai['username']; ?></td>
                            <td><?php echo $Gerai['email']; ?></td>
                            <td><?php echo $Gerai['no_tlp']; ?></td>
                            <td> <?php echo $Gerai['lokasi']; ?></td>
                        </tr>
                      <?php }?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
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
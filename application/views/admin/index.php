<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>GeraiAyam | Dashboard</title>
  <?php $this->load->view('admin/include/style'); ?>
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <?php $this->load->view('admin/include/navbar'); ?>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      <?php $this->load->view('admin/include/sidebar'); ?>
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
          <div class="row">
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-cube text-danger icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Total Jumlah Produk</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          <?php
                            $this->db->select('*');
                            $this->db->from('barang_abdiel');
                            $order = $this->db->get();
                            echo $order->num_rows();
                          ?>
                          </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-3 col-sm-6 grid-margin stretch-card">
              <div class="card card-statistics">
                <div class="card-body">
                  <div class="clearfix">
                    <div class="float-left">
                      <i class="mdi mdi-account-location text-info icon-lg"></i>
                    </div>
                    <div class="float-right">
                      <p class="mb-0 text-right">Gerai</p>
                      <div class="fluid-container">
                        <h3 class="font-weight-medium text-right mb-0">
                          <?php
                          $where = array('hak_akses' => '0');
                            $order = $query = $this->db->get_where('user_abdiel',$where);
                            echo $order->num_rows();
                          ?>
                        </h3>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
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
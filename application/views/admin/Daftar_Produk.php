<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>GeraiAyam | Daftar Produk</title>
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
                  <h4 class="card-title">Striped Table</h4>
                  <div class="table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                            <th>Kode Barang</th>
                            <th>Picture</th>
                            <th>Nama Barang</th>
                            <th>Harga</th>
                            <th>Stock</th>
                            <th>Deskripsi</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php foreach($data as $produk){ ?>
                        <tr>
                            <td><?php echo $produk['kd_brg']; ?></td>
                            <td class="py-1"><img src="<?php echo $produk['image']; ?>" alt="image" /></td>
                            <td><?php echo $produk['nm_brg']; ?></td>
                            <td> <?php echo $produk['harga']; ?></td>
                            <td><?php echo $produk['stok']; ?></td>
                            <td><?php echo $produk['deskripsi']; ?></td>
                            <td> 
                                <a href="<?php echo base_url();?>Admin/hapusproduk/<?php echo $produk['kd_brg'];?>" class="btn btn-icons btn-inverse-warning"><i class="mdi mdi-window-close"></i></a>
                            </td>
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
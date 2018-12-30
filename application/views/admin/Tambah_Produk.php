<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <title>GeraiAyam | Tambah Produk</title>
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
                         <h4 class="card-title">Input Produk</h4>
                         <?php echo form_open("Admin/prosestambahproduk", array('enctype'=>'multipart/form-data')); ?>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Kode Barang</label>
                                <input type="text" class="form-control" name="kdbrg" placeholder="Enter Kode">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Nama Produk</label>
                                <input type="text" class="form-control" name="Namaproduk" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Satuan</label>
                                <input type="text" class="form-control" name="satuan" placeholder="Kg,Buah,Berat">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Deskripsi</label>
                                <input type="text" class="form-control" name="deskripsi" placeholder="Deskripsi Produk">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Harga</label>
                                <input type="text" class="form-control" name="harga" placeholder="Harga Produk">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Stock</label>
                                <input type="text" class="form-control" name="stock" placeholder="Stock Produk">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Stock Minimal</label>
                                <input type="text" class="form-control" name="stock_min" placeholder="Stock Minimal Produk">
                            </div>
                            <div class="form-group">
                                <h5>Foto Produk</h5>
                                <small>300x300 bertipe jpg,png,jpeg</small>
                                <input type="file" class="form-control" name="input_gambar">
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
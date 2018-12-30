<nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item nav-profile">
            <div class="nav-link">
              <div class="user-wrapper">
                <div class="profile-image">
                  <img src="<?php echo base_url('asset/admin/'); ?>images/faces/face1.jpg" alt="profile image">
                </div>
                <div class="text-wrapper">
                  <p class="profile-name">Richard V.Welsh</p>
                  <div>
                    <small class="designation text-muted">Manager</small>
                    <span class="status-indicator online"></span>
                  </div>
                </div>
              </div>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin'); ?>">
              <i class="menu-icon mdi mdi-television"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <i class="menu-icon mdi mdi-content-copy"></i>
              <span class="menu-title">Gerai</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('Admin/Daftar_Gerai'); ?>">Daftar Gerai</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="<?php echo base_url('Admin/Tambah_Gerai'); ?>">Tambah Gerai</a>
                </li>
              </ul>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/Daftar_Produk'); ?>">
              <i class="menu-icon mdi mdi-backup-restore"></i>
              <span class="menu-title">Daftar Produk</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?php echo base_url('Admin/Tambah_Produk');?>">
              <i class="menu-icon mdi mdi-chart-line"></i>
              <span class="menu-title">Tambah Produk</span>
            </a>
          </li>
        </ul>
      </nav>
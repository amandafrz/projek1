<?php
$sidebar = '#10316B';
?>

<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4" style="background-color: <?php echo $sidebar; ?> ;">
    <!-- Brand Logo -->
    <a href="../../index3.html" class="brand-link">
      <img src="dist/img/zikra.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">New Zikra Book Store</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/gmbr.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
        <a style="color:#effffff;" href="#" class="d-block"><?php echo $l_nama ?></a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
            <a href="index.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
        
          <li class="nav-item">
            <a href="barang.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Barang
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="tbkategori.php" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
               Kategori Barang
              </p>
            </a>
          </li>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
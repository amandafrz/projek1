<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM produk WHERE id='$id'";
$data = mysqli_query($con,$qry);

$dt = mysqli_fetch_array($data);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- DataTables -->
  <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  <?php include_once('navbar.php') ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php include_once('sidebar.php') ?>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Update Barang</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Form Update Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm">
                <div class="card-body">
                  <div class="form-group">
                    <label for="kd_brg">Kode Barang</label>
                    <input type="kd_brg" value="<?php echo $dt['kd_brg']?>" name="kd_brg" class="form-control" id="kd_brg" placeholder="kd_brg">
                  </div>

                  <div class="form-group">
                    <label for="kategori">Kategori</label>
                    <input type="kategori" value="<?php echo $dt['kategori']?>" name="kategori" class="form-control" id="kategori" placeholder="kategori">
                  </div>

                  <div class="form-group">
                    <label for="nama_brg">Nama Barang</label>
                    <input type="nama_brg" value="<?php echo $dt['nama_brg']?>" name="nama_brg" class="form-control" id="nama_brg" placeholder="nama_brg">
                  </div>

                  <div class="form-group">
                    <label for="merk_brg">Merk Barang</label>
                    <input type="merk_brg" value="<?php echo $dt['merk_brg']?>" name="merk_brg" class="form-control" id="merk_brg" placeholder="merk_brg">
                  </div>

                  <div class="form-group">
                    <label for="stok">Stok Barang</label>
                    <input type="stok" value="<?php echo $dt['stok']?>" name="stok" class="form-control" id="stok" placeholder="stok">
                  </div>
                  
                  <div class="form-group">
                    <label for="harga">Harga Satuan</label>
                    <input type="harga" value="<?php echo $dt['harga']?>" name="harga" class="form-control" id="harga" placeholder="harga">
                  </div>
                  
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                  <a class="btn btn-secondary" href = "index.php"> Batal </a>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <?php include_once('footer.php')?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="../../plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="../../plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>

</script>
</body>
</html>


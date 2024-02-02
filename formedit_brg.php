<?php
include_once("koneksi.php");
$id = $_GET['id'];
$qry = "SELECT * FROM barang WHERE id='$id'";
$data = mysqli_query($con,$qry);

$brg = mysqli_fetch_array($data);

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
              
                <div class="card-body">
                <form action="proses_editb.php" method="POST" >
                <input type="hidden" name="id" value="<?php echo $brg['id'] ?>">

                  <div class="form-group">
                    <label for="kd_brg">Kode Barang</label>
                    <input type="kd_brg" value="<?php echo $brg['kd_brg']?>" name="kd_brg" class="form-control" id="kd_brg" placeholder="kd_brg">
                  </div>

                  <div class="form-group">
                    <label for="nama">Nama Barang</label>
                    <input type="nama" value="<?php echo $brg['nama']?>" name="nama" class="form-control" id="nama" placeholder="nama">
                  </div>

                  <div class="mb-3">
                    <select name="kategori" id="kategori" class="form-control">
                            <option selected>Pilih Kategori</option>
                            <?php
                                include("koneksi.php");
                                $query = "SELECT * FROM kategori";
                                $hasil = mysqli_query($con,$query);
                                foreach($hasil as $kt){
                                    ?>
                                    <option value="<?php echo $kt ['id']?>" <?php echo $brg['id']==$kt['id'] ? 'selected' : '' ?>>
                                    <?php echo $kt ['kd_kategori']?> - <?php echo $kt ['kategori']?> </option>
                                    <?php
                                }
                            ?>
                    </select>
                    <div id="kategori" class="form-text">
                        
                    </div>
                    <div class="form-group">
                    <label for="stok">Stok Barang</label>
                    <input type="stok" value="<?php echo $brg['stok']?>" name="stok" class="form-control" id="stok" placeholder="stok">
                  </div>

                  <div class="form-group">
                    <label for="harga">Harga Barang</label>
                    <input type="harga" value="<?php echo $brg['harga']?>" name="harga" class="form-control" id="harga" placeholder="harga">
                  </div>
                </div>
                </div>

                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                  <a class="btn btn-secondary" href = "barang.php"> Batal </a>
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
<!-- Page specific script -->

</body>
</html>

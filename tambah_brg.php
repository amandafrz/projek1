<?php
include_once("cek_login.php");
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
            <h1>Tambah Barang</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Tambah Barang</li>
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
                <h3 class="card-title">Form Tambah Barang</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              
                <div class="card-body">
                <form action="proses_tambahbrg.php" method="POST" >
                  <div class="form-group">
                    <label for="kd_brg" class="form-label">Kode Barang</label>
                    <input type="kd_brg" name="kd_brg" class="form-control" id="kd_brg" aria-describedy="kd_brg">
                  </div>

                  <div class="form-group">
                    <label for="nama" class="form-label">Nama Barang / Judul Buku</label>
                    <input type="nama" name="nama" class="form-control" id="nama" aria-describedy="nama">
                  </div>

                  <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                            <select name="kategori" id="kategori" class="form-control">
                            <option selected>Pilih Kategori</option>
                            <?php
                                include("koneksi.php");
                                $query = "SELECT * FROM kategori";
                                $hasil = mysqli_query($con,$query);
                                foreach($hasil as $kt){
                                    ?>
                                    <option value="<?php echo $kt ['id']?>"><?php echo $kt ['kd_kategori']?> - <?php echo $kt ['kategori']?> </option>
                                    <?php
                                }
                            ?>
                    </select>
                    <div id="jurusan" class="form-text">
                        
                    </div>
                </div>

                <div class="form-group">
                    <label for="stok" class="form-label">Stok Barang</label>
                    <input type="stok" name="stok" class="form-control" id="stok" aria-describedy="stok">
                  </div>
                  <div class="form-group">
                    <label for="harga" class="form-label">Harga Satuan</label>
                    <input type="harga" name="harga" class="form-control" id="harga" aria-describedy="harga">
                  </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary ">Submit</button>
                  <a class="btn btn-secondary" href ="barang.php"> Batal </a>
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
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- jquery-validation -->
<script src="plugins/jquery-validation/jquery.validate.min.js"></script>
<script src="plugins/jquery-validation/additional-methods.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  $.validator.setDefaults({
    submitHandler: function () {
      alert( "Form successful submitted!" );
    }
  });
  $('#quickForm').validate({
    rules: {
      kd_kategori: {
        required: true,
        kd_kategori: true,
      },
      kategori: {
        required: true,
        kd_kategori: true,
      },
      terms: {
        required: true
      },
    },
    messages: {
        kd_kategori: {
        required: "Kode jangan dikosongin!",
        kd_kategori: "Harap Kode Kategori diisi terlebih dahulu!"
      },
      kategori: {
        required: "Kategori jangan dikosongin!",
        kategori: "Harap Kategori diisi terlebih dahulu!"
      },
      terms: "Please accept our terms"
    },
    errorElement: 'span',
    errorPlacement: function (error, element) {
      error.addClass('invalid-feedback');
      element.closest('.form-group').append(error);
    },
    highlight: function (element, errorClass, validClass) {
      $(element).addClass('is-invalid');
    },
    unhighlight: function (element, errorClass, validClass) {
      $(element).removeClass('is-invalid');
    }
  });
});
</script>
</body>
</html>

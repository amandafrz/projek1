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
  <link rel="stylesheet" href="plugins/datatables-4/css/dataTables.bootstrap4.min.css">
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
            <h1>Kategori Produk</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Blank Page</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
              <div class="card-header">
                <h3 class="card-title">DataTable with default features</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>No</th>
                    <th>Kode Barang</th>
                    <th>Kategori</th>
                    <th>Stok Barang</th>
                    <th>Harga Barang</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  <div class="container">
                  <div class="row">
                      <div class="col-md-12 m-auto mt-3">
                        <a class="btn btn-outline-secondary mb-1" href = "tmbh_kategori.php" ><i class="fa-solid fa-user-plus"></i> Tambah Data </a>
                      <div class="card">
                  <tbody>
                  <?php
                    //1. membuat koneksi
                    include_once("koneksi.php");

                    //2. membuat query utk menampilkan seluruh data 
                    $qry = "SELECT *, barang.id as id_brg FROM barang INNER JOIN kategori ON barang.kategoris_id=kategori.id";

                    //3. menjalankan query
                    $tampil = mysqli_query($con,$qry);
                    //4. perulangan menampilkan data menggunakan looping foreach
                    $nomor = 1;
                    foreach($tampil as $data){
                    ?>
                  <tr>
                    <td><?php echo $nomor++ ?></td>
                    <td><?php echo $data['kd_brg'] ?></td>
                    <td><?php echo $data['nama'] ?></td>
                    <td><?php echo $data['kategori'] ?></td>
                    <td><?php echo $data['stok'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td> <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModal<?php echo $data['id_brg'] ?>" class="btn-warning btn-sm "> <i class="fas fa-folder"> </td>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $data['id_brg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-3" id="exampleModalLabel">Data Detail <?php echo $data['kategori'] ?></h1>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="mb-3">        
                                <label for="kd_brg" class="form-label"><b>Kode Barang</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['kd_brg'] ?> </span>
                                <hr>
                                <label for="nama" class="form-label"><b>Nama Barang</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['nama'] ?> </span>  
                                <hr>
                                <label for="kategori" class="form-label"><b>Kategori Barang</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['kategori'] ?> </span> 
                                <hr>
                                <label for="stok" class="form-label"><b>Stok Barang</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['stok'] ?> </span>    
                                <hr>
                                <label for="harga" class="form-label"><b>Harga Barang</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['harga'] ?> </span>                           
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                    </div>
                        </div>
                        </div>
                        </div>
                        </div>
                    <td><a href="formedit_kategori.php?id=<?php echo $data['id_brg'] ?>" class="btn btn-info btn-sm"><i class="fas fa-pencil-alt"></i></a>
                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#hapus<?php echo $data['id_brg'] ?>"><i class="fas fa-trash"></i></button>
                    <!-- Modal -->
                        <div class="modal fade" id="hapus<?php echo $data['id_brg'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                          <div class="modal-dialog">
                            <div class="modal-content">
                              <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                              </div>
                              <div class="modal-body">
                                Apakah <b><?php echo $data['nama'] ?></b> Ingin DiHapus Dari Katalog Produk?
                              </div>
                              <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                                <a href="proses_hapus.php?id=<?php echo $data['id_brg'] ?>" class="btn btn-danger">Yes</a>
                              </div>
                            </div>
                          </div>
                        </div>
                    </td>
                  </tr>
                  <?php
                      }
                  ?>

                  </tbody>
                  <tfoot>
                  <tr>
                  <th>No</th>
                    <th>Kode Barang</th>
                    <th>Kategori</th>
                    <th>Stok Barang</th>
                    <th>Harga Barang</th>
                    <th>Aksi</th>
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
      <!-- /.card -->

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
<!-- DataTables  & Plugins -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- Page specific script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
</html>
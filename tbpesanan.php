<?php
include_once("cek_login.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | Blank Page</title>
  <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
    
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
            <h1>Pesanan Saya</h1>
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
    <div class="col-md-12 m-auto mt-3">
          <a class="btn btn-outline-secondary mb-1" href = "tmbhpesanan.php" ><i class="fa-solid fa-plus"></i> Tambah Pesanan </a>
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
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Alamat</th>
                    <th>Aksi</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                  <?php
                    //1. membuat koneksi
                    include_once("koneksi.php");
                    //2. membuat query untuk menampilkan seluruh data
                    $qry = "SELECT *, pesanan.id as id_p FROM pesanan INNER JOIN produk ON pesanan.pesanans_id=pesanan.id";
                    //3. menjalankan query
                    $tampil = mysqli_query($con,$qry);
                    //4. menampilkan data menggunakan looping foreach
                    $nomor = 1;
                    foreach($tampil as $data){
                    ?>
                  <tr>
                    <td><?php echo $nomor++ ?></td>
                    <td><?php echo $data['kd_brg'] ?></td>
                    <td><?php echo $data['nama_brg'] ?></td>
                    <td><?php echo $data['jumlah'] ?></td>
                    <td><?php echo $data['harga'] ?></td>
                    <td><?php echo $data['alamat'] ?></td>
                    <td> <button type="button" class="btn btn-outline-info" data-bs-toggle="modal" data-bs-target="#exampleModal<?php echo $data['id'] ?>" class="btn-warning btn-sm "> Lihat </td>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Data Detail <?php echo $data['id'] ?></h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                            <div class="mb-3">       
                                <label for="kd_brg" class="form-label"><b>Kode Barang</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['kd_brg'] ?> </span>
                                <hr>
                                <label for="nama_brg" class="form-label"><b>Nama Barang</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['nama_brg'] ?> </span>
                                <hr>
                                <label for="jumlah" class="form-label"><b>Jumlah</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['jumlah'] ?> </span>
                                <hr>
                                <label for="harga" class="form-label"><b>Harga</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['harga'] ?> </span>
                                <hr>
                                <label for="alamat" class="form-label"><b>Alamat</b></label>
                                <br>
                                <span class fs-3 text><?php echo $data['alamat'] ?> </span>                              
                            </div>
                        </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    </div>
                    </div>
                        </div>
                        </div>
                    <td><a href="editproduk.php?id=<?php echo $data['id'] ?>" class="btn btn-outline-secondary"><i class="fa-solid fa-pencil"></i></a>
                   
                    <button type="button" class="btn btn-outline-secondary" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id'] ?>"><i class="fa fa-trash"></i></button>
                    <!-- Modal -->
                    <div class="modal fade" id="hapus<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="hapus<?php echo $data['id'] ?>" aria-hidden="true">
                    <div class="modal-dialog">
                    <div class="modal-content">
                    <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><b>Warning</b><i class="fa-solid fa-circle-exclamation"></i></h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                      Apakah kamu yakin menghapus <b><?php echo $data['nama'] ?> dalam data barang ini? </b>?
                    </div>
                    <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                    <a href="proses_hapus.php?id=<?php echo $data['id_mhs'] ?>" class="btn btn-primary">Ya</a>
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
                    <th>Nama Barang</th>
                    <th>Jumlah Barang</th>
                    <th>Harga Barang</th>
                    <th>Alamat</th>
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
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
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
<script src="js/bootstrap.js"></script>
<script src="js/all.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/all.css">
</head>
<body class="bg-secondary-subtle">
    <!-- Mulai Navbar -->
    <?php
        include_once("navbar.php");
    ?>
    <!-- Akhir Navbar -->

    <div class="container">
        <div class="row">
            <div class="col-md-12 m-auto mt-5">
                <a class="btn btn-outline-primary mb-1" href="form_jur.php"><i class="fa fa-user-plus"></i> Tambah Jurusan</a>
                <div class="card">
                    <div class="card-header">
                        Data Jurusan
                    </div>
                    <div class="card-body">
                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Kode Kategori</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            //1. membuat koneksi
                            include_once("koneksi.php");
                            //2. membuat query untuk menampilkan seluruh data
                            $qry = "SELECT * FROM kategori";
                            //3. menjalankan query
                            $tampil = mysqli_query($con,$qry);
                            //4. menampilkan data menggunakan looping foreach
                            $nomor = 1;
                            foreach($tampil as $data){
                            ?>
                            <tr>
                                <th scope="row"><?php echo $nomor++ ?></th>
                                <td><?php echo $data['kd_kategori'] ?></td>
                                <td><?php echo $data['kategori'] ?></td>
                                
                                
                                    <!-- Modal -->
                                    
                                <td>
                                    <a href="form_edit.php?id=<?php echo $data['id'] ?>" class="btn btn-sm btn-info"><i class="fa fa-pencil-alt"></i></a>
                                    <button type="button" data-bs-toggle="modal" data-bs-target="#hapus<?php echo $data['id'] ?>" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></button>
                                    <!-- Modal -->
                                    <div class="modal fade" id="hapus<?php echo $data['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="exampleModalLabel">Peringatan</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            Apakah Data Mahasiswa Dengan Nama <b><?php echo $data['kategori'] ?></b> Ingin Dihapus?
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tidak</button>
                                            <a href="proses_hapus.php?id=<?php echo $data['id'] ?>" class="btn btn-danger">Ya</a>
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
                    </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <script src="js/bootstrap.js"></script>
    <script src="js/all.js"></script>
</body>
</html>
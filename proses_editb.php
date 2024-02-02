<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id = $_POST['id'];
$kd_brg = $_POST['kd_brg'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];


//3. membuat query update
//3. membuat query INSERT
$qry ="UPDATE barang SET kd_brg='$kd_brg',nama='$nama',kategoris_id='$kategori', stok='$stok',harga='$harga' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>


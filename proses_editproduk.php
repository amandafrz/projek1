<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id = $_POST['id'];
$kd_brg = $_POST['kd_brg'];
$kategori = $_POST['kategori'];
$nama_brg = $_POST['nama_brg'];
$merk = $_POST['merk'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

//3. membuat query INSERT
$qry ="UPDATE produk SET kd_brg='$kd_brg',kategori='$kategori', nama_brg='$nama_brg',merk='$merk',stok='$stok',
harga='$harga' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>


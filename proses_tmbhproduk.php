<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$kd_brg = $_POST['kd_brg'];
$kategori = $_POST['kategori'];
$nama_brg = $_POST['nama_brg'];
$merk = $_POST['merk'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

//3. membuat query INSERT
$qry ="INSERT INTO produk (kd_brg,kategori,nama_brg,merk,stok,harga) VALUES ('$kd_brg',
'$kategori','$nama_brg','$merk','$stok','$harga')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>


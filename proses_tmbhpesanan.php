<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$kd_brg = $_POST['kd_brg'];
$nama_brg = $_POST['nama_brg'];
$jumlah = $_POST['jumlah'];
$harga = $_POST['harga'];
$alamat = $_POST['alamat'];

//3. membuat query INSERT
$qry ="INSERT INTO pesanan (kd_brg,nama_brg,jumlah,harga,alamat) VALUES ('$kd_brg',
'$nama_brg','$jumlah','$harga','$alamat')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>


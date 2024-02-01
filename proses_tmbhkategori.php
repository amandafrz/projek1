<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$kd_brg = $_POST['kd_kategori'];
$nama_brg = $_POST['kategori'];

//3. membuat query INSERT
$qry ="INSERT INTO kategori (kd_kategori,kategori) VALUES ('$kd_kategori','$kategori')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>
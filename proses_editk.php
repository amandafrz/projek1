<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$id = $_POST['id'];
$kd_kategori = $_POST['kd_kategori'];
$kategori = $_POST['kategori'];


//3. membuat query INSERT
$qry ="UPDATE kategori SET kd_kategori='$kd_kategori',kategori='$kategori' WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "index.php";
    </script>


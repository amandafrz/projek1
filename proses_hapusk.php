<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil id dari url
$id = $_GET['id'];

//3. membuat query hapus
$qry = "DELETE FROM kategori WHERE id='$id'";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. redirect ke jurusan
?>
<script>
    document.location= "hapus_ktgr.php";
    </script>
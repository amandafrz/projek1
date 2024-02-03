<?php
// 1.Membuat koneksi
include_once("koneksi.php");

//2.Mengambil id dari URL
$id = $_GET['id'];

//3.Membuat query delete
$qry = "DELETE FROM kategori WHERE id='$id'";

//4.Menjalankan query
$simpan = mysqli_query($con,$qry);

//5.Redirect ke index 
?>
<script>
    document.location="tbkategori.php";
</script>
<?php
// 1. membuat koneksi
include_once("koneksi.php");

//2. mengambil seluruh nilai input dan dimasukkan ke variabel
$kd_brg = $_POST['kd_brg'];
$nama = $_POST['nama'];
$kategori = $_POST['kategori'];
$stok = $_POST['stok'];
$harga = $_POST['harga'];

//3. membuat query INSERT
$qry ="INSERT INTO barang (kd_brg,nama,kategoris_id,stok,harga) VALUES ('$kd_brg','$nama','$kategori','$stok','$harga')";

//4. menjalankan query
$simpan = mysqli_query($con,$qry);

//5. alihkan ke halaman index.php
?>
<script>
    document.location= "barang.php";
    </script>


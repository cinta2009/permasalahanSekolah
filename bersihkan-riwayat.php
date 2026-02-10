<?php
include 'config.php';

// Menghapus semua isi tabel tb_izin
mysqli_query($koneksi, "TRUNCATE TABLE tb_izin");

header("Location: view-data.php");
exit;
?>
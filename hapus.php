<?php
include 'config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    // Menghapus data berdasarkan ID yang dipilih
    mysqli_query($koneksi, "DELETE FROM tb_izin WHERE id='$id'");
}

header("Location: view-data.php");
exit;
?>
<?php
include 'config.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM tbsiswa WHERE id='$id'");

header("Location: view-data.php");
exit;
?>
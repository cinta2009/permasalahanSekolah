<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_siswa'];
    $tujuan = $_POST['tujuan'];

    $sql = "INSERT INTO tb_izin (nama_siswa, tujuan) VALUES ('$nama', '$tujuan')";
    mysqli_query($koneksi, $sql);

    header("Location: view-data.php");
    exit();
}
?>
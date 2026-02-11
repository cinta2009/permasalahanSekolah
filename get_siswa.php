<?php
include 'config.php';

$kelas = $_GET['kelas'];
// Ambil data dari tabel master berdasarkan kelas yang diklik
$query = mysqli_query($koneksi, "SELECT nama_siswa FROM tb_master_siswa WHERE kelas = '$kelas'");

$data_siswa = [];
while ($row = mysqli_fetch_assoc($query)) {
    $data_siswa[] = $row;
}

// Mengirim data dalam bentuk JSON ke JavaScript di index.php
echo json_encode($data_siswa);
?>
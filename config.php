<?php
// Host, User, Password, Nama Database
$koneksi = mysqli_connect("localhost", "root", "root", "dbsekolah");

// TAMBAHKAN BARIS INI:
date_default_timezone_set('Asia/Jakarta'); 

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
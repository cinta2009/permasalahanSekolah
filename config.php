<?php
// Host, User, Password, Nama Database
$koneksi = mysqli_connect("localhost", "root", "root", "dbsekolah");

if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
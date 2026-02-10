<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <?php
    include 'config.php';

    $id = $_GET['id'];

    // ambil data lama
    $sql = mysqli_query($koneksi, "SELECT * FROM tbsiswa WHERE id='$id'");
    $siswa = mysqli_fetch_assoc($sql);

    // proses update
    if (isset($_POST['update'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $umur = $_POST['umur'];
        $jenisKelamin = $_POST['jenisKelamin'];
        $alamat = $_POST['alamat'];

        mysqli_query($koneksi, "UPDATE tbsiswa 
        SET nama='$nama', kelas='$kelas',umur='$umur',jenisKelamin='$jenisKelamin' , alamat='$alamat' 
        WHERE id='$id'");

        header("Location: view-data.php");
        exit;
    }
    ?>

    <div class="container">
        <h2>Update Data Siswa</h2>

        <form method="post">
            <label>Nama</label>
            <input type="text" name="nama" value="<?= htmlspecialchars($siswa['nama']); ?>" required>

            <label>Kelas</label>
            <input type="text" name="kelas" value="<?= htmlspecialchars($siswa['kelas']); ?>" required>

            <label>Umur</label>
            <input type="text" name="umur" value="<?= htmlspecialchars($siswa['umur']); ?>" required>

            <label>JenisKelamin</label>
            <input type="text" name="jenisKelamin" value="<?= htmlspecialchars($siswa['jenisKelamin']); ?>" required>

            <label>Alamat</label>
            <input type="text" name="alamat" value="<?= htmlspecialchars($siswa['alamat']); ?>" required>

            <input type="submit" name="update" value="Update">
        </form>

        <br>
        <a href="view-data.php"><button>Kembali</button></a>
    </div>

</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>E-Izin Keluar - Input</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Form Izin Siswa</h2>
        <form action="proses-input.php" method="post">
            <label>Pilih Kelas</label>
            <select id="select_kelas" name="kelas" onchange="filterNama()" required>
                <option value="">-- Pilih Kelas --</option>
                <option value="XI RPL 1">XI RPL 1</option>
                <option value="XI RPL 2">XI RPL 2</option>
                <option value="XI RPL 3">XI RPL 3</option>
            </select>

            <label>Nama Siswa</label>
            <select id="select_nama" name="nama_siswa" required disabled>
                <option value="">-- Pilih Kelas Terlebih Dahulu --</option>
            </select>

            <label>Tujuan</label>
            <select name="tujuan" required>
                <option value="Toilet">Toilet</option>
                <option value="Perpustakaan">Perpustakaan</option>
                <option value="UKS">UKS</option>
                <option value="Kantin">Kantin</option>
            </select>

            <input type="submit" value="Kirim Izin">
        </form>
        <br>
        <a href="view-data.php">Lihat Daftar Izin &raquo;</a>
    </div>

    <script>
    function filterNama() {
        var kelas = document.getElementById("select_kelas").value;
        var selectNama = document.getElementById("select_nama");

        if (kelas == "") {
            selectNama.disabled = true;
            selectNama.innerHTML = '<option value="">-- Pilih Kelas Terlebih Dahulu --</option>';
        } else {
            selectNama.disabled = false;
            // Ambil data dari get_siswa.php tanpa refresh halaman
            fetch('get_siswa.php?kelas=' + kelas)
                .then(response => response.json())
                .then(data => {
                    var options = '<option value="">-- Pilih Nama Kamu --</option>';
                    data.forEach(item => {
                        options += `<option value="${item.nama_siswa}">${item.nama_siswa}</option>`;
                    });
                    selectNama.innerHTML = options;
                });
        }
    }
    </script>
</body>

</html>
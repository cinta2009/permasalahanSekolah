<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jadwal Bulanan</title>
</head>

<body>
    <?php
    include 'config.php'
    ?>

    <form action="prosesinput.php" method="post">
        <h3>Jadwal Bulanan</h3>

        <label>bulan</label>
        <input type="text" name="bulan" required oninvalid="this.setCustomValidity('Kolom bulan tidak boleh kosong!')"
            oninput="setCustomValidity('')">

        <label>target</label>
        <input type="text" name="target" required
            oninvalid="this.setCustomValidity('Target harus diisi agar data valid.')" oninput="setCustomValidity('')">

        <label>to_do</label>
        <input type="text" name="to_do" required
            oninvalid="this.setCustomValidity('Rencana kegiatan (to_do) wajib diisi.')" oninput="setCustomValidity('')">

        <input type="submit" value="kirim">
    </form>
</body>

</html>
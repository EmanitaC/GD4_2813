<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Tiket - TiketWar</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        .form-group { margin-bottom: 15px; }
        label { display: block; font-weight: bold; margin-bottom: 5px; }
        input[type="text"], input[type="number"] { width: 100%; max-width: 350px; padding: 8px; }
        button { padding: 8px 16px; background-color: #007bff; color: white; border: none; border-radius: 4px; cursor: pointer; }
    </style>
</head>
<body>

    <h2>Tambah Tiket War Baru</h2>

    <form action="prosesTambah.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
            <label>Nama Konser:</label>
            <input type="text" name="nama" placeholder="Contoh: Bruno Mars Live in Jakarta" required>
        </div>

        <div class="form-group">
            <label>Kategori Tiket:</label>
            <input type="text" name="kategori" placeholder="Contoh: VIP / CAT 1 / Festival" required>
        </div>

        <div class="form-group">
            <label>Harga Tiket (Rp):</label>
            <input type="number" name="harga" placeholder="Contoh: 1500000" required>
        </div>

        <div class="form-group">
            <label>Upload Banner / Gambar Tiket:</label>
            <input type="file" name="bukti" accept=".jpg, .jpeg, .png" required>
        </div>

        <button type="submit">Simpan Tiket</button>
        <a href="dashboard.php" style="margin-left: 10px;">Batal</a>
    </form>

</body>
</html>
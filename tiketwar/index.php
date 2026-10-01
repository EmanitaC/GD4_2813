<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TiketWar</title>
</head>
<body>
    <?php 
        $namaKonser = "Coldplay - Music of the Spheres";
        $hargaTiket = 1500000;
        $sisaTiket = 25;
        $sudahSoldOut = false;
        $kategoriTiket = "Festival";
    ?>

    <p>Konser: <?php echo $namaKonser; ?></p>
    <p>Harga: <?php echo $hargaTiket;?></p>
    <p>Sisa Tiket: <?php echo $sisaTiket; ?></p>
    <p>Kategori tiket: <?php echo $kategoriTiket?></p>
</body>
</html>
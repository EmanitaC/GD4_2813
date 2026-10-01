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

        $daftarKonser = [
            [
                "nama" => "Coldplay - Music of the Spheres",
                "tanggal" => "2026-03-15",
                "kategoriTiket" => "Festival",
                "harga" => 1500000
            ],
            [
                "nama" => "Dewa 19 Reunion Show",
                "tanggal" => "2026-04-02",
                "kategoriTiket" => "VIP",
                "harga" => 25000000
            ],
            [
                "nama" => "NCT Dream World Tour",
                "tanggal" => "2026-05-20",
                "kategoriTiket" => "Reguler",
                "harga" => 9000000
            ],
        ];
    ?>

    <?php
        $tiket = ["nama" => "VIP", "harga" => 500000];
        echo $tiket["harga"];
    ?>

    <?php
        $hargaAsli = $daftarKonser[0]["harga"];
        $persenDiskon = 20;
        $hargaSetelahDiskon = $hargaAsli - ($hargaAsli * $persenDiskon / 100);
        $tiketMasihAda = $daftarKonser[0]["harga"] > 0;
    ?>

    <p>Konser: <?php echo $namaKonser; ?></p>
    <p>Harga: <?php echo $hargaTiket;?></p>
    <p>Sisa Tiket: <?php echo $sisaTiket; ?></p>

    <p>Konser terdekat: <?php echo $daftarKonser[0]["nama"]; ?></p>
    <p>Tanggal: <?php echo $daftarKonser[0]["tanggal"]; ?></p>

    <p>Harga asli: Rp<?php echo $hargaAsli; ?></p>
    <p>Setelah diskon <?php echo $persenDiskon; ?>%: Rp<?php echo $hargaSetelahDiskon; ?></p>
</body>
</html>
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
                "kategori" => "Festival",
                "harga" => 1500000
            ],
            [
                "nama" => "Dewa 19 Reunion Show",
                "tanggal" => "2026-04-02",
                "kategori" => "VIP",
                "harga" => 25000000
            ],
            [
                "nama" => "NCT Dream World Tour",
                "tanggal" => "2026-05-20",
                "kategori" => "Reguler",
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

    <?php
        $jumlahTiket = "2";
        $totalHarga = $jumlahTiket + $jumlahTiket + $jumlahTiket;
        echo $totalHarga;

        $kodePromo = "2" . "2" . "2";
        echo $kodePromo;
    ?>

    <?php
        $sisaTiket = $daftarKonser[0]["harga"] > 0 ? 15 : 0; 
        if ($sisaTiket > 10) {
            $statusTiket = "Masih Banyak";
        } elseif ($sisaTiket > 0) {
            $statusTiket = "Sisa Dikit, Buruan!";
        } else {
            $statusTiket = "Sold Out";
        }
        $kategori = $daftarKonser[0]["kategori"];
        switch ($kategori) {
            case "Festival": $badge = "Festival Pass"; break;
            case "VIP": $badge = "VIP Access"; break;
            case "Reguler": $badge = "Reguler"; break;
            default: $badge = "Kategori tidak dikenali";
        }    
    ?>
    
    <?php
        $kategori = "VIP";
        switch ($kategori) {
            case "Festival":
                echo "Festival Pass";
            break;

            case "VIP":
                echo "VIP Access";
            break;

            case "Reguler":
                echo "Reguler";
            break;
        }

    ?>

    <p>Status: <?php echo $statusTiket; ?></p>
    <p>Kategori: <?php echo $badge; ?></p>

    <p>Konser: <?php echo $namaKonser; ?></p>
    <p>Harga: <?php echo $hargaTiket;?></p>
    <p>Sisa Tiket: <?php echo $sisaTiket; ?></p>

    <!-- <p>Konser terdekat: <?php //echo $daftarKonser[0]["nama"]; ?></p>
    <p>Tanggal: <?php //echo $daftarKonser[0]["tanggal"]; ?></p> -->

    <h2>Daftar Konser War Tiket Minggu Ini</h2>

    <?php foreach ($daftarKonser as $konser) { ?>
        <div style="border: 1px solid #ccc; padding: 12px; margin-bottom: 8px;">
            <h3><?php echo $konser["nama"]; ?></h3>
            <p>Tanggal: <?php echo $konser["tanggal"]; ?></p>
            <p>Kategori: <?php echo $konser["kategori"]; ?></p>
            <p>Harga: Rp<?php echo number_format($konser["harga"], 0, ",", "."); ?></p>
        </div>
    <?php } ?>

    <?php
        $sisaTiket = 5;
        while ($sisaTiket > 0) {
            echo "Tiket tersisa: $sisaTiket <br>";
            $sisaTiket--;
        }
    ?>
    
    <p>Harga asli: Rp<?php echo $hargaAsli; ?></p>
    <p>Setelah diskon <?php echo $persenDiskon; ?>%: Rp<?php echo $hargaSetelahDiskon; ?></p>
</body>
</html>
<?php
session_start();

if (!isset($_SESSION["admin"])) {
    header("Location: login.php");
    exit;
}

if (isset($_POST["hapusIndex"])) {
    $index = $_POST["hapusIndex"];
    
    // Hapus elemen array berdasarkan index[cite: 24]
    unset($_SESSION["daftarWar"][$index]);
    
    // Re-index array agar kunci/index tetap berurutan (0, 1, 2, ...)
    $_SESSION["daftarWar"] = array_values($_SESSION["daftarWar"]);
}

header("Location: dashboard.php");
exit;
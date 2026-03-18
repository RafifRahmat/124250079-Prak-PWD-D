<?php
    session_start();

    $name = $_POST['nama'];
    $berat = $_POST['paket'];
    $layanan = $_POST['kategori'];

    $harga =
    [
        "Sameday" => 5000,
        "Express" => 7000,
        "Instant" => 10000
    ];

    $harga_kategori = $harga[$layanan];

    $total_bayar = $harga_kategori * $berat;

    $_SESSION['nama_user'] = $name;
    $_SESSION['total'] = $total_bayar; 
    $_SESSION['layanannya'] = $layanan;
    
    header("location: landing.php");
    exit();
    
?>
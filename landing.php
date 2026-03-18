<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DroneBox/page=Landing</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <div class="main">
      <div class="navbar">
        <div class="icon">
          <h2 class="logo"><a href="index.html">DroneBox</a></h2>
        </div>
    
        <div class="form">
            <h2 class="success">Pemesanan Berhasil!</h2>
       
            <div class="info">
                <p>Halo, <?php echo $_SESSION['nama_user']; ?> pesanan anda telah kami konfirmasi</p>
                <p>Anda menggunakan layanan <?php echo $_SESSION['layanannya']; ?></p>
                <p>Total pembayaran adalah Rp<?php echo number_format($_SESSION['total'], 0, ',', '.'); ?></p>
                <p>ID Drone : DC-1732</p>
                <p>Estimasi : 33 Menit tiba di lokasi</p>
            </div>

            <p class="cek">
              Silahkan cek Email Anda untuk intruksi pelacakan drone secara real-time  
            </p>
            
            <a href="index.html" class="btn1">Kembali</a>
        </div>
    </div>
</body>
</html>
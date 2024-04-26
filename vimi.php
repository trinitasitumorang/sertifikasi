<?php
session_start();

include 'koneksi.php';
$tgl = date('Y-m-d');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Club Motor - Visi dan Misi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header id="header">
        <div class="logo-container">
            <img src="images/logo_club.png" alt="Club Motor Logo">
        </div>
        <div class="company-name">
            <h1>CLUB MOTOR</h1>
        </div>
        <nav id="navbar">
            <a href="index.php">Home</a>
            <a href="profil.php">Profil</a>
            <a href="#" class="active">Visi dan Misi</a>
            <a href="produk.php">Produk Kami</a>
            <a href="kontak.php">Kontak Kami</a>
            <a href="about.php">About Us</a>
        </nav>
    </header>

    <div id="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Visi dan Misi Perusahaan</h2>
                    <div id="vision">
                        <h3>Visi</h3>
                        <p>Menjadi mitra terpercaya bagi para penggemar motor dalam menyediakan produk berkualitas tinggi dan layanan yang memenuhi kebutuhan berkendara mereka.</p>
                    </div>
                    <div id="mission">
                        <h3>Misi</h3>
                        <ul>
                            <li>Menyediakan motor berkualitas tinggi dengan harga yang terjangkau.</li>
                            <li>Memberikan layanan perawatan dan modifikasi motor yang profesional dan handal.</li>
                            <li>Membangun komunitas penggemar motor yang solid dan saling mendukung.</li>
                            <li>Menyelenggarakan acara dan kegiatan yang memperkuat ikatan antara anggota komunitas kami.</li>
                            <li>Terus berinovasi dan berkembang untuk memenuhi tuntutan pasar yang terus berubah.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <footer id="footer">
        <h3>Club Motor</h3>
    </footer>
</body>
</html>

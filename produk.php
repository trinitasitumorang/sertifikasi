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
    <title>Produk Kami - Club Motor</title>
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
        <a href="index.php">Index</a>
        <a href="profil.php">Profil</a>
        <a href="vimi.php">Visi dan Misi</a>
        <a href="#" class="active">Produk Kami</a>
        <a href="kontak.php">Kontak Kami</a>
        <a href="about.php">About Us</a>
    </nav>
</header>

<div id="content-container">
    <div class="container">
        <div class="section">
            <h2 class="section-title">Produk Kami</h2>
            <div class="product-list">
                <div class="product">
                    <img src="images/motor-honda.jpg" alt="Product 1">
                    <h3 class="product-name">HONDA BEBEK</h3>
                    <p class="product-description">Motor matic Honda terbaru ini hadir dengan desain stylish serta beberapa fitur canggih</p>
                    <p class="product-price">Harga: Rp.15.040.000</p>
                </div>

                <div class="product">
                    <img src="images/honda1.jpg" alt="Product 2">
                    <h3 class="product-name">HONDA MATIC</h3>
                    <p class="product-description">Motor matic Honda terbaru ini hadir dengan desain stylish serta beberapa fitur canggih</p>
                    <p class="product-price">Harga: Rp.18.989.000</p>
                </div>

                <div class="product">
                    <img src="images/honda2.jpg" alt="Product 3">
                    <h3 class="product-name">HONDA SPORT</h3>
                    <p class="product-description">Motor Sport Honda terbaru ini hadir dengan desain stylish serta beberapa fitur canggih</p>
                    <p class="product-price">Harga: Rp.24.785.000</p>
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

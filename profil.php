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
    <title>Club Motor - Profil</title>
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
            <a href="#" class="active">Profil</a>
            <a href="vimi.php">Visi dan Misi</a>
            <a href="produk.php">Produk Kami</a>
            <a href="kontak.php">Kontak Kami</a>
            <a href="about.php">About Us</a>
        </nav>
    </header>

    <div id="content-container">
        <div class="container">
            <div class="row">
                <div id="profil">
                <div class="col-md-12">
                    <h2 class="section-title">Profil Perusahaan</h2>
                    <p class="section-description">
                        Club Motor adalah perusahaan yang berfokus pada penjualan, perawatan, dan modifikasi motor. Kami didirikan pada tahun 2005 dengan komitmen untuk menyediakan pengalaman berkendara yang luar biasa bagi pelanggan kami. Sejak berdiri, kami telah menjadi salah satu pemimpin dalam industri ini dan terus berupaya untuk memberikan layanan terbaik kepada komunitas kami.
                    </p>
                </div>
</div>
            </div>
            <div class="row">
                <div id="profil">
                <div class="col-md-12">
                <h2 class="section-title">Pengalaman Perusahaan</h2>
                <p class="section-description">Club Motor telah memiliki pengalaman yang luas dalam industri sepeda motor sejak didirikan pada tahun 2005. Kami telah melayani ribuan pelanggan dan terus berinovasi untuk memberikan layanan terbaik kepada mereka.</p>
                <p class="section-description">Dengan tim yang berpengalaman dan komitmen yang kuat terhadap kepuasan pelanggan, kami terus berusaha untuk menjadi yang terbaik dalam industri ini.</p>
            </div>
        </div>
        <div class="row">
            <div id="profil">
            <div class="col-md-12">
                <h2 class="section-title">Kelebihan Perusahaan</h2>
                <ul>
                    <li>Produk berkualitas dengan harga terjangkau.</li>
                    <li>Pelayanan pelanggan yang ramah dan responsif.</li>
                    <li>Berbagai pilihan motor dari berbagai merek terkemuka.</li>
                    <li>Garansi produk untuk kepuasan pelanggan.</li>
                    <li>Tim mekanik yang handal untuk layanan purna jual.</li>
                </ul>
            </div>
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

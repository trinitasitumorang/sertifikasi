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
    <title>Club Motor - About Us</title>
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
            <a href="produk.php">Produk Kami</a>
            <a href="kontak.php">Kontak Kami</a>
            <a href="#" class="active">About Us</a>
        </nav>
    </header>

    <div id="content-container">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="section-title">Tentang Kami</h2>
                    <div class="section-content">
                        <p>
                            Club Motor bukan sekadar bisnis, tetapi sebuah komunitas yang tumbuh dari hasrat bersama akan petualangan dan kebebasan berkendara. Berdiri pada tahun 2005, Club Motor lahir dari impian beberapa penggemar motor yang ingin menghadirkan pengalaman berkendara yang unik dan memuaskan bagi komunitas penggemar motor di seluruh negeri.
                        </p>
                        <p>
                            Kisah kami dimulai dari sebuah garasi kecil di sudut kota yang ramai. Dengan tekad dan semangat yang berkobar, kami memulai perjalanan kami dengan sedikit lebih dari impian dan sebuah visi untuk mengubah cara orang menjelajahi dunia.
                        </p>
                        <p>
                            Selama perjalanan panjang kami, Club Motor telah berkembang menjadi destinasi utama bagi mereka yang menginginkan pengalaman berkendara yang tak terlupakan. Dengan fokus pada kualitas, keandalan, dan pelayanan yang unggul, kami telah menjadi tujuan utama bagi pecinta motor dari berbagai kalangan.
                        </p>
                        <p>
                            Sebagai pionir dalam industri ini, kami telah memperluas jangkauan layanan kami dari penjualan motor hingga penyediaan suku cadang, layanan perawatan, dan komunitas yang kuat yang saling mendukung dan menginspirasi.
                        </p>
                        <p>
                            Dengan semangat inovasi yang tak pernah padam dan komitmen yang kokoh terhadap kepuasan pelanggan, Club Motor terus berusaha menjadi yang terbaik dalam apa yang kami lakukan. Bersama-sama, kami melanjutkan perjalanan kami untuk merangkul kebebasan dan petualangan di jalan raya, sambil membangun hubungan yang langgeng dengan komunitas kami.
                        </p>
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

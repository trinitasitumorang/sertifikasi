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
    <title>Club Motor</title>
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
            <a href="#" class="active">Home</a>
            <a href="profil.php">Profil</a>
            <a href="vimi.php">Visi dan Misi</a>
            <a href="produk.php">Produk Kami</a>
            <a href="kontak.php">Kontak Kami</a>
            <a href="about.php"><u>About Us</u></a>
            <a href="logout.php">LogOut</a>
        </nav>
    </header>
<div id="content-container">
    <div class="container">
        <div class="row"><br/><br/><br/>
            <div class="col-md-10 col-md-offset-1" style="background-image:url('../asanoer-background.jpg')">
                <div class="col-md-4 col-md-offset-4">
                    <div class="panel panel-warning login-panel"
                         style="background-color:rgba(255, 255, 255, 0.6);position:relative;">

                        <div class="panel-footer">

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
			<div id="index">
		<div class="col-md-15 text-center">
    <h2 class="section-title">Selamat Datang di Club Motor</h2>
    <p class="section-description">Temukan kebebasan Anda dengan bergabung bersama kami. <br>Di Club Motor, kami menyediakan pengalaman berkendara yang tak terlupakan dengan motor-motor berkualitas dan layanan yang terbaik.</p>
    <a href="produk.php" class="btn btn-primary">Jelajahi Produk Kami</a>
	</div>
	</div>
				<br>
				<div id="about-us">
            <h2>Sebuah Kisah Perjalanan Club Motor</h2>
            <p>Club Motor bukan sekadar bisnis, tetapi sebuah komunitas yang tumbuh dari hasrat bersama akan petualangan dan kebebasan berkendara. Berdiri pada tahun 2005, Club Motor lahir dari impian beberapa penggemar motor yang ingin menghadirkan pengalaman berkendara yang unik dan memuaskan bagi komunitas penggemar motor di seluruh negeri.</p>
            <p>Kisah kami dimulai dari sebuah garasi kecil di sudut kota yang ramai. Dengan tekad dan semangat yang berkobar, kami memulai perjalanan kami dengan sedikit lebih dari impian dan sebuah visi untuk mengubah cara orang menjelajahi dunia.</p>
            <p>Selama perjalanan panjang kami, Club Motor telah berkembang menjadi destinasi utama bagi mereka yang menginginkan pengalaman berkendara yang tak terlupakan. Dengan fokus pada kualitas, keandalan, dan pelayanan yang unggul, kami telah menjadi tujuan utama bagi pecinta motor dari berbagai kalangan.</p>
            <p>Sebagai pionir dalam industri ini, kami telah memperluas jangkauan layanan kami dari penjualan motor hingga penyediaan suku cadang, layanan perawatan, dan komunitas yang kuat yang saling mendukung dan menginspirasi.</p>
            <p>Dengan semangat inovasi yang tak pernah padam dan komitmen yang kokoh terhadap kepuasan pelanggan, Club Motor terus berusaha menjadi yang terbaik dalam apa yang kami lakukan. Bersama-sama, kami melanjutkan perjalanan kami untuk merangkul kebebasan dan petualangan di jalan raya, sambil membangun hubungan yang langgeng dengan komunitas kami.</p>
        		</div>
				<div id="gallery">
    			<h2>Gallery</h2><br>
    <div class="gallery-container">
        <div class="gallery-item">
            <img src="images/gallery1.jpg" alt="Image 1">
        </div>
        <div class="gallery-item">
            <img src="images/gallery2.jpg" alt="Image 2">
        </div>
        <div class="gallery-item">
            <img src="images/gallery3.jpg" alt="Image 3">
        </div>
            </div>
        </div>
    </div>
</div>
<div id="articles">
    <h2>Artikel</h2>
    <div class="article-container">
        <div class="article">
            <h3>Manfaatkan Kekuatan CBR250RR, Pebalap Astra Honda Kibarkan Merah Putih di ARRC China</h3>
            <p>JAKARTA – Pebalap binaan PT Astra Honda Motor (AHM) meraih hasil positif dalam balapan yang penuh tantangan. Herjun Atna Firdaus melanjutkan tren podium dengan berhasil finish ke-3, mengibarkan Bendera Merah Putih di ajang Asia Road Racing Championship (ARRC) seri ke-2 race pertama kelas Asia Production (AP)250 menggunakan CBR250RR di Zhuhai International Circuit, Zhuhai, China, Sabtu (20/4).</p>
        </div>
        <div class="article">
            <h3>2.559 Konsumen Setia Honda Mudik Bersama ke Kampung Halaman</h3>
            <p>Jakarta- PT Astra Honda Motor (AHM) kembali mengantarkan konsumen pulang ke kampung halaman melalui program Mudik Balik Bareng Honda (MBBH) yang telah memasuki tahun penyelenggaraan ke-16. Sebanyak 2.559 konsumen setia Honda diantarkan mudik ke kampung halaman dengan aman dan nyaman agar dapat bersilaturahim dengan keluarga menyambut Hari Raya Idul Fitri 1445 H.</p>
        </div>
    </div>
</div>
<div id="events">
    <h2>Event</h2>
    <div class="event-container">
        <div class="event">
            <h3>Carsentro Auto Week Ciptakan Momen Berharga Bagi Keluarga Lewat Kegiatan Kreatif Anak</h3>
            <p>Bogor — Carsentro Bogor menjadi pusat perhatian dengan suksesnya Carsentro Auto Week dengan kegiatan Lomba Mewarnai untuk Anak, Minggu (25/2/2024).</p>
        </div>
        <div class="event">
            <h3>Citroen C3 Aircross, SUV Yang Menawarkan Kenyamanan Bagi Penggunanya</h3>
            <p>C3 Aircross sudah resmi dipasarkan di Indonesia. Sebelumnya mobil berjenis Sport Utility Vehicle (SUV) telah lebih dahulu diperkenalkan ke publik pada Agustus tahun lalu bersamaan dengan ajang Gaikindo Indonesia International Auto Show (GIIAS) 2023 di Tangerang.</p>
        </div>
    </div>
</div>
<div id="footer">
    <h3>Club Motor</h3>
</div>
</body>
</html>

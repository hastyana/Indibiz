<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link href="img/indibiz-logoonly.png" rel="icon">
    <link href="img/indibiz-logoonly.png" rel="apple-touch-icon">
    <title>Rekomendasi Paket Indibiz</title>
</head>

<?php
session_start();
error_reporting(0);
include 'connection.php'; 
if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'user') {
    header('location: index.php');
    exit();
}
?>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="home.php">
            <img src="img/indibiz-logo.png" width="100" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="home.php">Beranda</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="product.php">Produk</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="#">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="contact.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black-50 bold link-primary link-offset-2" href="faq.php">FAQ</a>
                </li>
            </ul>
        </div>
        <a class="navbar-brand" href="logout_process.php">
            <button type="button" class="btn btn-outline-primary">
                Logout
            </button>
        </a>
    </nav>

    <header>
        <div class="">
            <div class="row">
                <div class="align-items-end justify-content-end">
                    <img src="img/about.jpg" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </header>

    <section id="About" class="container py-5">
        <div class="text-center justify-content-center">
            <h5>Tentang Kami</h5>
        </div>
        <div class="pt-5">
            <h2>Apa itu Indibiz?</h2>
            <p>
                Indibiz by Telkom Indonesia hadir sebagai solusi inovatif untuk memenuhi kebutuhan akses internet dengan dukungan konektivitas yang handal bagi pengembangan UKM di era modern dan digital saat ini.
            </p>
            <p>
            Tujuan dari Indibiz adalah untuk mendukung pertumbuhan bisnis, dengan menyediakan berbagai solusi digital yang dapat dimanfaatkan oleh para pelaku usaha untuk menciptakan lebih banyak peluang bisnis.
            </p>
            <br>
            <h4>Jelajahi Solusi Digitalisasi Bisnis dari Indibiz</h4>
            <ul>
                <li class="fw-italic">
                    <h6>Internet Bisnis</h6> <br>
                    <p>
                    Solusi jaringan koneksi internet yang menghubungkan pengguna dengan dunia digital secara cepat, stabil dan efisien.
                    </p>
                </li>
                <li class="fw-italic">
                    <h6>Operasional</h6> <br>
                    <p>
                    Solusi kebutuhan digital untuk manajemen bisnis yang inovatif dan terintegrasi, serta meningkatkan efisiensi dan produktivitas.
                    </p>
                </li>
                <li class="fw-italic">
                    <h6>Finansial</h6> <br>
                    <p>
                    Kumpulan produk digital pilihan untuk membantu membangun serta meningkatkan visibilitas brand dengan efektif.
                    </p>
                </li>
                <li class="fw-italic">
                    <h6>SDM</h6> <br>
                    <p>
                    Produk yang dapat memfasilitasi pengembangan keterampilan, dan meningkatkan produktivitas.
                    </p>
                </li>
                <li class="fw-italic">
                    <h6>Pemasaran</h6> <br>
                    <p>
                    Produk yang dapat merangsang inovasi, dan mengoptimalkan kinerja bisnis dalam era teknologi yang terus berkembang.
                    </p>
                </li>
            </ul>
        </div>
    </section>

    <footer class="pt-lg-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <a class="navbar-brand" href="#">
                        <img src="img/index2.png" width="170" height="150" class="d-inline-block align-top" alt="">
                    </a>
                </div>

                <div class="col-md-6 offset-md-1 mb-3">
                    <h3 class="text-white">Rekomendasi Paket Indibiz</h3>
                    <ul class="nav flex-row">
                        <li class="nav-item pr-4 py-2"><a href="#" class="nav-link p-0 text-white link-dark link-offset-2">Home</a></li>
                        <li class="nav-item px-4 py-2"><a href="#" class="nav-link p-0 text-white link-dark link-offset-2">Features</a></li>
                        <li class="nav-item px-4 py-2"><a href="#" class="nav-link p-0 text-white link-dark link-offset-2">Pricing</a></li>
                        <li class="nav-item px-4 py-2"><a href="#" class="nav-link p-0 text-white link-dark link-offset-2">FAQs</a></li>
                        <li class="nav-item pl-4 py-2"><a href="#" class="nav-link p-0 text-white link-dark link-offset-2">About</a></li>
                    </ul>
                </div>
                <div class="d-flex flex-column flex-sm-row justify-content-end py-4 my-4 border-top">
                    <p class="text-white">&copy; 2024 Company, Inc. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
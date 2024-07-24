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
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="about.php">Tentang Kami</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="#">Kontak</a>
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

    <header class="py-5 container">
        <div class="text-center justify-content-center">
            <h2>Hubungi Call Center Indibiz 188 untuk Bantuan 24 Jam</h2>
        </div>
        <div class="row py-5">
            <div class="col-xl-4 col-md-6 align-items-stretch py-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box py-5 px-3 shadow-lg rounded-3">
                    <div class="icon d-flex align-items-start pb-3">
                        <div class="rounded rounded-circle justify-content-center align-self-center px-4">
                            <i class="fi fi-rs-phone-rotary text-danger"></i>
                        </div>
                        <div class="px-3">
                            <p class="text-sm-start fw-bold text-black-50">Call Center</p>
                            <h2 class="center align-self-center">188</h2>
                        </div>
                    </div>  
                    <p class="text-sm-start text-black-50">Dari handphone tekan 188</p>     
                </div>
            </div>
            <div class="col-xl-8 col-md-6 align-items-stretch py-4" data-aos="zoom-in" data-aos-delay="100">
                <div class="icon-box py-5 px-3 shadow-lg rounded-3">
                    <div class="icon d-flex align-items-start pb-3">
                        <div class="rounded rounded-circle justify-content-center align-self-center px-4">
                        <i class="fi fi-rs-envelope text-danger"></i>
                        </div>
                        <div class="px-3">
                            <p class="text-sm-start fw-bold text-black-50">Email</p>
                            <h2 class="center align-self-center">cs@indibiz.com</h2>
                        </div>
                    </div>  
                    <a class="navbar-brand" href="#">
                        <button type="button" class="btn btn-danger">
                            Kirim Email
                        </button>
                    </a>        
                </div>
            </div>
        </div>
    </header>

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
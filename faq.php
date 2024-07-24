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
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="contact.php">Kontak</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-black-50 bold link-primary link-offset-2" href="#">FAQ</a>
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
        <div class="justify-content-center">
            <h2>Frequently Asked Questions (FAQ'S)</h2>
        </div>
        <div class="accordion accordion-flush pt-5" id="accordionExample">
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingOne">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Apakah Indihome pindah ke Telkomsel ?
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Ya, mulai 1 Juli 2023 layanan IndiHome secara resmi bergabung menjadi bagian dari Telkomsel.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingTwo">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Apakah anda hanya menjual paket internet ?
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                    Ya, kami hanya melayani penjualan paket internet indihome.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingThree">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                        kapan saya mendapatkan paket internet ?
                    </button>
                </h2>
                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Kami akan melayani pemasangan internet Anda 2-3 hari setelah anda menginput data.</p>
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header" id="headingFour">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                    Bagaimana melakukan pembayaran pesanan ?
                    </button>
                </h2>
                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <p>Melalui basis PAYPAL dan transfer melalui M-Banking.</p>
                    </div>
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
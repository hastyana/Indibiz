<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-filter.css" rel="stylesheet">
    <link href="node_modules/bootstrap/dist/css/bootstrap-carousel.css" rel="stylesheet">
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/popper.js@1.12.6/dist/umd/popper.js" integrity="sha384-fA23ZRQ3G/J53mElWqVJEGJzU0sTs+SvzG8fXVWP+kJQ1lwFAOkcUOysnlKJC33U" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/bootstrap-material-design@4.1.1/dist/js/bootstrap-material-design.js" integrity="sha384-CauSuKpEqAFajSpkdjv3z9t8E7RlpJ1UP0lKM/+NdtSarroVKu069AlsRPKkFBz9" crossorigin="anonymous"></script>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>  
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-straight/css/uicons-thin-straight.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-thin-rounded/css/uicons-thin-rounded.css'>
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

<body class="bg-white">
    <nav class="navbar navbar-expand-lg navbar-light bg-light px-4">
        <a class="navbar-brand" href="home.php">
            <img src="img/indibiz-logo.png" width="100" height="30" class="d-inline-block align-top" alt="">
        </a>
        <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link text-black-50 link-primary link-offset-2" href="#">Beranda</a>
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

    <header class="pb-5">
        <div class="row">
            <div class="align-items-center justify-content-center">
                <div class="card card-raised card-carousel">
                    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel" data-interval="3000">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                            <li data-target="#carouselExampleIndicators" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="img/Hero2.png"
                                alt="First slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/Hero4.png" alt="Second slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                                </div>
                            <div class="carousel-item">
                                <img class="d-block w-100" src="img/Hero5.png" alt="Third slide">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                            <i class="fi fi-rr-angle-small-left text-black"></i>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                            <i class="fi fi-rr-angle-small-right text-black"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <section id="" class="py-5">
        <div class="container rounded-5 p-3 bg-danger ">
            <div class="row content text-white">
                <div class="col-lg-6">
                    <h4 class="p-2">
                    Selamat datang di Website Rekomendasi Paket Indibiz
                    </h4>
                    <p class="p-2">
                    Kami akan membantu anda dalam memilih layanan paket internet Indibiz sesuai kebutuhan anda. Bebas akses internet stabil, telepon jernih dan tayangan TV interaktif terpopuler dengan Indibiz. Miliki layanan internet terbaik sekarang juga.
                    </p>
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 align-self-center justify-content-center p-2">
                    <h3>
                    Ciptakan Peluang Wujudkan Harapan
                    </h3>
                </div>
            </div>
        </div>
    </section>

    <section id="Paket" class="py-5 container">
        <div class="text-center justify-content-center">
            <h2>Paket Internet Indibiz</h2>
        </div>
        <div class="row">
            <div class="">
                <h4>Paket 1P (Internet)</h4>
            </div>
            <?php                                
            $data = mysqli_query($conn,"SELECT*FROM attribut WHERE kategori='Paket 1P (Internet)' ORDER BY kecepatan_item ASC LIMIT 3");
            $no = 1;
            while($d=mysqli_fetch_array($data)){
            echo "
                <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                    <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                        <div class='icon d-flex align-items-start'>
                            <img class='w-25' src='img/$d[gambar_item]' alt='card-image'>
                            <div>
                                <h5 class='center align-self-center'>$d[nama_item] - $d[kategori]</h5>
                                <p class='text-sm-start text-black-50'>$d[keterangan]</p>
                            </div>
                        </div>  
                        <h5 class='font-weight-bold py-4'>Rp. $d[harga_item]/ bulan</h5>   
                        <ul class='pb-2'>
                            <li>
                                <p class='text-sm-start text-black-50'>Diskon 70% biaya pasang baru</p>
                            </li>
                            <li>
                                <p class='text-sm-start text-black-50'>Kecepatan internet up to $d[kecepatan_item] MBPS</p>
                            </li>
                        </ul>
                        <a class='navbar-brand' href='pemesanan.php?id_item=$d[id_item]'>
                            <button type='button' class='btn btn-outline-danger'>
                                Berlangganan
                            </button>
                        </a>         
                    </div>
                </div>
            ";} ?>
            <div class="text-center justify-content-center pt-5">
                <a class="navbar-brand" href="product.php">
                    <button type="button" class="btn btn-outline-danger rounded-5">
                        Lihat Semua
                    </button>
                </a>
            </div>
            <div class="">
                <h4>Paket 2P (Internet+Televisi)</h4>
            </div>
            <?php                                
            $data2 = mysqli_query($conn,"SELECT*FROM attribut WHERE kategori='Paket 2P (Internet+Televisi)' ORDER BY kecepatan_item LIMIT 3");
            $no = 1;
            while($d2=mysqli_fetch_array($data2)){
            echo "
                <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                    <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                        <div class='icon d-flex align-items-start'>
                            <img class='w-25' src='img/$d2[gambar_item]' alt='card-image'>
                            <div>
                                <h5 class='center align-self-center'>$d2[nama_item] - $d2[kategori]</h5>
                                <p class='text-sm-start text-black-50'>$d2[keterangan]</p>
                            </div>
                        </div>  
                        <h5 class='font-weight-bold py-4'>Rp. $d2[harga_item]/ bulan</h5>   
                        <ul class='pb-2'>
                            <li>
                            <p class='text-sm-start text-black-50'>Diskon 70% biaya pasang baru</p>
                            </li>
                            <li>
                                <p class='text-sm-start text-black-50'>Kecepatan internet up to $d2[kecepatan_item] MBPS</p>
                            </li>
                        </ul>
                        <a class='navbar-brand' href='pemesanan.php?id_item=$d2[id_item]'>
                            <button type='button' class='btn btn-outline-danger'>
                                Berlangganan
                            </button>
                        </a>         
                    </div>
                </div>
            ";} ?>
            <div class="text-center justify-content-center pt-5">
                <a class="navbar-brand" href="product.php">
                    <button type="button" class="btn btn-outline-danger rounded-5">
                        Lihat Semua
                    </button>
                </a>
            </div>
            <div class="">
                <h4>Paket 2P (Internet+Phone)</h4>
            </div>
            <?php                                
            $data3 = mysqli_query($conn,"SELECT*FROM attribut WHERE kategori='Paket 2P (Internet+Phone)' ORDER BY kecepatan_item LIMIT 3");
            $no = 1;
            while($d3=mysqli_fetch_array($data3)){
            echo "
                <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                    <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                        <div class='icon d-flex align-items-start'>
                            <img class='w-25' src='img/$d3[gambar_item]' alt='card-image'>
                            <div>
                                <h5 class='center align-self-center'>$d3[nama_item] - $d3[kategori]</h5>
                                <p class='text-sm-start text-black-50'>$d3[keterangan]</p>
                            </div>
                        </div>  
                        <h5 class='font-weight-bold py-4'>Rp. $d3[harga_item]/ bulan</h5>   
                        <ul class='pb-2'>
                            <li>
                                <p class='text-sm-start text-black-50'>Diskon 70% biaya pasang baru</p>
                            </li>
                            <li>
                                <p class='text-sm-start text-black-50'>Kecepatan internet up to $d3[kecepatan_item] MBPS</p>
                            </li>
                        </ul>
                        <a class='navbar-brand' href='pemesanan.php?id_item=$d3[id_item]'>
                            <button type='button' class='btn btn-outline-danger'>
                                Berlangganan
                            </button>
                        </a>         
                    </div>
                </div>
            ";} ?>
            <div class="text-center justify-content-center pt-5">
                <a class="navbar-brand" href="product.php">
                    <button type="button" class="btn btn-outline-danger rounded-5">
                        Lihat Semua
                    </button>
                </a>
            </div>
            <div class="">
                <h4>Paket 3P (Internet+TV+Phone)</h4>
            </div>
            <?php                                
            $data4 = mysqli_query($conn,"SELECT*FROM attribut WHERE kategori='Paket 3P (Internet+TV+Phone)' ORDER BY kecepatan_item LIMIT 3");
            $no = 1;
            while($d4=mysqli_fetch_array($data4)){
            echo "
                <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                    <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                        <div class='icon d-flex align-items-start'>
                            <img class='w-25' src='img/$d4[gambar_item]' alt='card-image'>
                            <div>
                                <h5 class='center align-self-center'>$d4[nama_item] - $d4[kategori]</h5>
                                <p class='text-sm-start text-black-50'>$d4[keterangan]</p>
                            </div>
                        </div>  
                        <h5 class='font-weight-bold py-4'>Rp. $d4[harga_item]/ bulan</h5>   
                        <ul class='pb-2'>
                            <li>
                                <p class='text-sm-start text-black-50'>Diskon 70% biaya pasang baru</p>
                            </li>
                            <li>
                                <p class='text-sm-start text-black-50'>Kecepatan internet up to $d4[kecepatan_item] MBPS</p>
                            </li>
                        </ul>
                        <a class='navbar-brand' href='pemesanan.php?id_item=$d4[id_item]'>
                            <button type='button' class='btn btn-outline-danger'>
                                Berlangganan
                            </button>
                        </a>         
                    </div>
                </div>
            ";} ?>
            <div class="text-center justify-content-center pt-2">
                <a class="navbar-brand" href="product.php">
                    <button type="button" class="btn btn-outline-danger rounded-5">
                        Lihat Semua
                    </button>
                </a>
            </div>
        </div>
    </section>

    <section class="container py-5 flex">
        <div class="row">
            <div class="col-sm">
                <div class="accordion accordion-flush pt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="true" aria-controls="collapseFive">
                                <i class="fi fi-ts-suitcase-alt"></i>&nbsp;</i>Paket Internet Bisnis
                            </button>
                        </h2>
                        <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?php                                
                            $data5 = mysqli_query($conn,"SELECT*FROM attribut WHERE peruntukan_item='Bisnis' LIMIT 3");
                            $no = 1;
                            while($d5=mysqli_fetch_array($data5)){
                            echo "
                                <div class='col p-1'>
                                    <div class='card'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$d5[nama_item] - $d5[kategori]</h5>
                                            <p class='card-text'>Rp. $d5[harga_item]/ bulan</p>
                                            <p class='card-text'>Kecepatan internet up to $d5[kecepatan_item]</p>
                                            <a href='pemesanan.php?id_item=$d5[id_item]' class='btn btn-primary'>Berlangganan</a>
                                        </div>
                                    </div>
                                </div>
                            ";} ?>
                                <div class="text-center justify-content-center pt-2">
                                    <a class="navbar-brand" href="product.php">
                                        <button type="button" class="btn btn-outline-danger rounded-5">
                                            Lihat Semua
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>  
                </div>
            </div>
            <div class="col-sm">
                <div class="accordion accordion-flush pt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                                <i class="fi fi-ts-apartment"></i>&nbsp;Paket Internet Perusahaan                                
                            </button>
                        </h2>
                        <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?php                                
                            $data6 = mysqli_query($conn,"SELECT*FROM attribut WHERE peruntukan_item='Perusahaan' LIMIT 3");
                            $no = 1;
                            while($d6=mysqli_fetch_array($data6)){
                            echo "
                                <div class='col p-1'>
                                    <div class='card'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$d6[nama_item] - $d6[kategori]</h5>
                                            <p class='card-text'>Rp. $d6[harga_item]/ bulan</p>
                                            <p class='card-text'>Kecepatan internet up to $d6[kecepatan_item]</p>
                                            <a href='pemesanan.php?id_item=$d6[id_item]' class='btn btn-primary'>Berlangganan</a>
                                        </div>
                                    </div>
                                </div>
                            ";} ?>
                                <div class="text-center justify-content-center pt-5">
                                    <a class="navbar-brand" href="product.php">
                                        <button type="button" class="btn btn-outline-danger rounded-5">
                                            Lihat Semua
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm">
                <div class="accordion accordion-flush pt-5" id="accordionExample">
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                                <i class="fi fi-ts-bank"></i></i>&nbsp;Paket Internet Pemerintahan                                
                            </button>
                        </h2>
                        <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                            <?php                                
                            $data7 = mysqli_query($conn,"SELECT*FROM attribut WHERE peruntukan_item='Pemerintahan' LIMIT 3");
                            $no = 1;
                            while($d7=mysqli_fetch_array($data7)){
                            echo "
                                <div class='col p-1'>
                                    <div class='card'>
                                        <div class='card-body'>
                                            <h5 class='card-title'>$d7[nama_item] - $d7[kategori]</h5>
                                            <p class='card-text'>Rp. $d7[harga_item]/ bulan</p>
                                            <p class='card-text'>Kecepatan internet up to $d7[kecepatan_item]</p>
                                            <a href='pemesanan.php?id_item=$d7[id_item]' class='btn btn-primary'>Berlangganan</a>
                                        </div>
                                    </div>
                                </div>
                            ";} ?>
                                <div class="text-center justify-content-center pt-5">
                                    <a class="navbar-brand" href="product.php">
                                        <button type="button" class="btn btn-outline-danger rounded-5">
                                            Lihat Semua
                                        </button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="container py-5">
        <div class="justify-content-center">
            <h4>Frequently Asked Questions (FAQ'S)</h4>
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
        <div class="pt-5">
            <a class="navbar-brand" href="faq.php">
                <button type="button" class="btn btn-outline-primary rounded-5">
                    Lihat Semua
                </button>
            </a>
        </div>
    </section>

    <footer class="pt-5 bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-6 col-md-2 mb-3">
                    <a class="navbar-brand" href="#">
                        <img src="img/index2.png" width="240" height="150" class="d-inline-block align-top" alt="">
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

<script>
// Activate Carousel
$("#myCarousel").carousel();

// Enable Carousel Indicators
$(".item").click(function(){
  $("#myCarousel").carousel(1);
});

// Enable Carousel Controls
$(".left").click(function(){
  $("#myCarousel").carousel("prev");
});
</script>

</html>
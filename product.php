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

    <section id="Paket" class="py-5 container">
        <div class="py-5 px-5 rounded bg-white">
            <h4 class="text-center">Cek Kebutuhan Anda</h4>
            <form action="product.php" method="post">
                <div class="py-2">
                    <label class="pb-1">Paket</label>
                    <select class="form-select" name="kategori">
                        <option value=""> Pilih Paket</option>
                        <?php 
                        $sql=mysqli_query($conn,"SELECT DISTINCT kategori FROM attribut");
                        while ($data=mysqli_fetch_assoc($sql)) {
                        ?>
                        <option value="<?=$data['kategori']?>"><?=$data['kategori']?></option> 
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="py-2">
                    <label class="pb-1">Kecepatan / Mbps</label>
                    <select class="form-select" name="kecepatan">
                        <option value=""> Pilih Kecepatan </option>
                        <?php 
                        $sql=mysqli_query($conn,"SELECT DISTINCT kecepatan_item FROM attribut");
                        while ($data=mysqli_fetch_assoc($sql)) {
                        ?>
                        <option value="<?=$data['kecepatan_item']?>"><?=$data['kecepatan_item']?></option> 
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="py-2">
                    <label class="pb-1">Harga Paket </label>
                    <select class="form-select" aria-label="Default select example" name="harga">
                        <option value=""> Pilih Harga</option>
                        <option value="BETWEEN 300000 AND 499999"> < 500000 </option> 
                        <option value="BETWEEN 500000 AND 799999">500000 - 800000</option> 
                        <option value="BETWEEN 800000 AND 999999">800000 - 1000000</option> 
                        <option value="BETWEEN 1000000 AND 2000000"> > 1000000 </option> 
                    </select>
                </div>
                <div class="py-2">
                    <label class="pb-1">Peruntukan</label>
                    <select class="form-select" name="peruntukan">
                        <option value=""> Pilih Peruntukan</option>
                        <?php 
                        $sql=mysqli_query($conn,"SELECT DISTINCT peruntukan_item FROM attribut");
                        while ($data=mysqli_fetch_assoc($sql)) {
                        ?>
                        <option value="<?=$data['peruntukan_item']?>"><?=$data['peruntukan_item']?></option> 
                        <?php
                        }
                        ?>
                    </select>
                </div>
                <div class="py-2">
                    <input type="submit" name="submit" value="Cek Rekomendasi" class="btn btn-outline-danger">
                </div>
            </form>
        </div>
        <div class="row mb-5">
            <div class='text-center pt-4'>
                <h4>Lihat Hasil Pencarian Anda Disini</h4>
            </div>
            <?php
            if (isset($_POST["submit"])){
            $harga = $_POST["harga"];
            $kecepatan = $_POST["kecepatan"];
            $kategori = $_POST["kategori"];
            $peruntukan = $_POST["peruntukan"];
            $no = 1;
            if (!empty($harga) AND !empty($kecepatan) AND !empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga AND kecepatan_item='$kecepatan' AND kategori='$kategori' AND peruntukan_item='$peruntukan'");  
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (empty($harga) AND !empty($kecepatan) AND !empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE kecepatan_item='$kecepatan' AND kategori='$kategori' AND peruntukan_item='$peruntukan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (!empty($harga) AND empty($kecepatan) AND !empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga AND kategori='$kategori' AND peruntukan_item='$peruntukan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (!empty($harga) AND !empty($kecepatan) AND empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga AND kecepatan_item='$kecepatan' AND peruntukan_item='$peruntukan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (!empty($harga) AND !empty($kecepatan) AND !empty($kategori) AND empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga AND kecepatan_item='$kecepatan' AND kategori='$kategori'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (empty($harga) AND empty($kecepatan) AND !empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE kategori='$kategori' AND peruntukan_item='$peruntukan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (empty($harga) AND !empty($kecepatan) AND empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE kecepatan_item='$kecepatan' AND peruntukan_item='$peruntukan'"); 
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                        $no++;

            }elseif (empty($harga) AND !empty($kecepatan) AND !empty($kategori) AND empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE kecepatan_item='$kecepatan' AND kategori='$kategori'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (!empty($harga) AND empty($kecepatan) AND empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga AND peruntukan_item='$peruntukan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (!empty($harga) AND empty($kecepatan) AND !empty($kategori) AND empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga AND kategori='$kategori'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (!empty($harga) AND !empty($kecepatan) AND empty($kategori) AND empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga AND kecepatan_item='$kecepatan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (!empty($harga) AND empty($kecepatan) AND empty($kategori) AND empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE harga_item $harga");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (empty($harga) AND !empty($kecepatan) AND empty($kategori) AND empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE kecepatan_item='$kecepatan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (empty($harga) AND empty($kecepatan) AND !empty($kategori) AND empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE kategori='$kategori'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                $no++;
            }elseif (empty($harga) AND empty($kecepatan) AND empty($kategori) AND !empty($peruntukan)) {
                $query = mysqli_query($conn,"SELECT * FROM attribut WHERE peruntukan_item='$peruntukan'");
                if (mysqli_num_rows($query) > 0){
                    while($brg = mysqli_fetch_assoc($query)){
                    echo "
                    <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                        <div class='icon-box py-5 px-3 shadow-lg rounded-3 bg-white'>
                            <div class='icon d-flex align-items-start'>
                                <img class='w-25' src='img/$brg[gambar_item]' alt='card-image'>
                                <div>
                                    <h5 class='center align-self-center'>$brg[nama_item] - $brg[kategori]</h5>
                                    <p class='text-sm-start text-black-50'>$brg[keterangan]</p>
                                </div>
                            </div>  
                            <h5 class='font-weight-bold py-4'>Rp. $brg[harga_item]/ bulan</h5>   
                            <ul class='pb-2'>
                                <li>
                                    <p class='text-sm-start text-black-50'></p>Diskon 70% biaya pasang baru</p>
                                </li>
                                <li>
                                    <p class='text-sm-start text-black-50'>Kecepatan internet up to $brg[kecepatan_item] MBPS</p>
                                </li>
                            </ul>
                            <a class='navbar-brand' href='pemesanan.php?id_item=$brg[id_item]'>
                                <button type='button' class='btn btn-outline-danger'>
                                    Berlangganan
                                </button>
                            </a>         
                        </div>
                    </div>
                    ";
                }}else{
                    echo "
                    <div class='container rounded-2 p-3 bg-white mt-5'>
                        <div class='row content text-white text-center'>
                            <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                                <h1 class='py-2 text-center text-black'>
                                    Paket tidak ditemukan .....
                                </h1>
                            </div>
                        </div>
                    </div>
                    ";
                }
                        $no++;
            }else{
                echo "
                <div class='container rounded-2 p-3 bg-white mt-5'>
                    <div class='row content text-white text-center'>
                        <div class='pt-4 pt-lg-0 align-self-center justify-content-center p-2'>
                            <h1 class='py-2 text-center text-black'>
                                Paket tidak ditemukan .....
                            </h1>
                        </div>
                    </div>
                </div>
                ";
            }
            }
            ?>
        </div>        
        <div class="container rounded-2 p-3 bg-danger mt-5">
            <div class="row content text-white text-center">
                <div class="pt-4 pt-lg-0 align-self-center justify-content-center p-2">
                    <img src="img/top.png" class="img-fluid" alt="Phone image">
                    <h2 class="py-2">
                        Ciptakan Peluang Wujudkan Harapan Bersama Indibiz
                    </h2>
                    <img src="img/bot.png" class="img-fluid" alt="Phone image">
                </div>
            </div>
        </div>
        <div class="mt-5 mb-5"> 
            <div class="row g-2"> 
                <div class="col-md-12 bg-white rounded-2 py-2 px-2"> 
                    <div class="row g-2"> 
                        <h2>Produk Paketan Indihome</h2> 
                        <?php                                
                        $data4 = mysqli_query($conn,"SELECT * FROM attribut ORDER BY peruntukan_item");
                        $no = 1;
                        while($d4=mysqli_fetch_array($data4)){
                        echo "
                            <div class='col-xl-4 col-md-6 d-flex align-items-stretch py-4'>
                                <div class='icon-box py-5 px-3 rounded-3 border border-primary'>
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
                                        <button type='button' class='btn btn-outline-primary'>
                                            Berlangganan
                                        </button>
                                    </a>         
                                </div>
                            </div>
                        ";} ?>
                    </div>
                </div> 
            </div> 
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
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../node_modules/bootstrap/dist/css/sb-admin-2.min.css" rel="stylesheet">
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/sb-admin-2.min.js"></script>
    <script src="../node_modules/bootstrap/dist/js/sb-admin-2.js"></script>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-rounded/css/uicons-regular-rounded.css'>
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-regular-straight/css/uicons-regular-straight.css'>
    <link href="../img/indibiz-logoonly.png" rel="icon">
    <link href="../img/indibiz-logoonly.png" rel="apple-touch-icon">
    <title>Admin</title>
</head>

<?php
session_start();
error_reporting(0);
include '../connection.php'; 

if (!isset($_SESSION['username']) || $_SESSION['level'] !== 'admin') {
    // Redirect to the login page if not logged in as admin
    header('location: ../index.php');
    exit();
}
?>

<body>
    <div id="wrapper">
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3"> Dashboard Admin </div>
            </a>
            <hr class="sidebar-divider my-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <hr class="sidebar-divider">
            <li class="nav-item active">
                <a class="nav-link collapsed" href="paket.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Paket Internet</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="pesanan.php" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Pesanan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="laporan.php" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Laporan</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link collapsed" href="pelanggan.php" data-toggle="collapse" data-target="#collapseUtilities"
                    aria-expanded="true" aria-controls="collapseUtilities">
                    <span>Pelanggan</span>
                </a>
            </li>
            <hr class="sidebar-divider d-none d-md-block">
            <div class="text-center d-none d-md-inline">
                <a href="../logout_process.php" class="rounded-circle border-0 text-white"><i class="fi fi-rs-sign-out-alt"></i></a>
            </div>
        </ul>
        <div id="content-wrapper" class="d-flex flex-column">
            <div id="content">
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>
                <div class="container-fluid">
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h6 class="mb-0 text-gray-800">Tambah Kategori</h6> 
                            <a href="paket.php" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="form-group">                                    
                                    <input type="text" name="nama_kategori" maxlenght="100" class="form-control form-control-user" value="" placeholder="Kategori">
                                </div>
                                <a href="paket.php"><input class ="btn btn-primary btn-icon-split py-1 px-2" type="submit" name="Simpan" value="Simpan"> </a>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
</body>

<!-- PHP Logic -->
<?php
    if(isset($_POST['Simpan'])){
        $nama_kategori=$_POST['nama_kategori'];
        $id_kategori=$_POST['id_kategori'];
        $insert = mysqli_query($conn, "INSERT INTO kategori (id_kategori, nama_kategori) VALUES ('$id_kategori','$nama_kategori')");
        if($insert){
            echo 'Berhasil upload';
            header('location:paket.php');
        }else{
            echo 'Gagal upload';
        }
    }
?>

</html>
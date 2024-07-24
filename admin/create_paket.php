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
                            <h6 class="mb-0 text-gray-800">Tambah Paket Layanan Internet</h6> 
                            <a href="paket.php" class="d-none d-sm-inline-block btn btn-sm btn-warning shadow-sm">
                                Kembali
                            </a>
                        </div>
                        <div class="card-body">
                            <form action="" method="POST" enctype="multipart/form-data">
                                <div class="table-responsive">
                                    <table  id="dataTable" width="100%" cellspacing="0">
                                        <tr>
                                            <td>
                                                <div class="form-group">                                    
                                                    <input type="text" name="nama_item" maxlenght="100" class="form-control form-control-user" value="" placeholder="Nama Item">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">                                    
                                                    <input type="text" name="harga_item" maxlenght="100" class="form-control form-control-user" value="" placeholder="Harga">
                                                </div>
                                            </td>                                            
                                            <td>
                                                <div class="form-group">                                    
                                                    <select class="form-control form-control-user" name="kategori" id="kategori" maxlenght="75">
                                                        <option value="">-- Kategori --</option>
                                                        <?php 
                                                        $sql=mysqli_query($conn, "SELECT * FROM kategori");
                                                        while ($data=mysqli_fetch_array($sql)) {
                                                        ?>
                                                        <option value="<?=$data['nama_kategori']?>"><?=$data['nama_kategori']?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">                                    
                                                    <input type="text" name="kecepatan_item" maxlenght="100" class="form-control form-control-user" value="" placeholder="Kecepatan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">                                    
                                                    <input type="text" name="peruntukan_item" maxlenght="100" class="form-control form-control-user" value="" placeholder="Peruntukan">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">                                    
                                                    <input type="text" name="spesial" maxlenght="100" class="form-control form-control-user" value="" placeholder="Spesial">
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Gambar Item</label>
                                                    <input type="file" name="gambar_item" id="gambar_item" class="form-control-file" accept="image/*" value="">
                                                </div>
                                            </td>
                                            <td>
                                                <div class="form-group">                                    
                                                    <input type="text" name="keterangan" maxlenght="100" class="form-control form-control-user" value="" placeholder="Keterangan">
                                                </div>
                                            </td>
                                        </tr>
                                    </table>                                
                                <a href="paket.php"> <input class ="btn btn-primary btn-icon-split py-1 px-2" type="submit" name="Simpan" value="Simpan"> </a>
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

<?php
if(isset($_POST['Simpan'])){
    $id_item=$_POST['id_item'];
    $nama_item=$_POST['nama_item'];
    $harga_item=$_POST['harga_item'];
    $kecepatan_item=$_POST['kecepatan_item'];
    $peruntukan_item=$_POST['peruntukan_item'];
    $spesial=$_POST['spesial'];
    $kategori=$_POST['kategori'];
    $keterangan=$_POST['keterangan'];

    $direktori = '../img/';
    $file = md5(rand()) . '.' . $_FILES['gambar_item']['name'];
    $target_file = $direktori . $file;
    $gambar_item = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    $check = getimagesize($_FILES['gambar_item']['tmp_name']);
    if($check !== false) {
        echo "
        file adalah image - " . $check['mime'] ;
        $gambar_item = 1;
    } else {
        echo "
        file bukan image 
        " ;
        $gambar_item = 0;
    }

    // cek file ready
    if (file_exists($target_file)) {
        echo "
        maaf, file sudah tersedia 
        " ;
        $gambar_item = 0; 
    }

    // cek ukuran file
    if ($_FILES['gambar_item']['size'] > 200000) {
        echo "
        maaf, file yang diunggah terlalu besar 
        " ;
        $gambar_item = 0;
    }

    // format
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
        echo "
        maaf, hanya file dengan format JPG, JPEG, PNG & GIF
        " ;
        $gambar_item = 0;
    }

    // saving
    if ($gambar_item==0) {
        echo "
        <script>     
            alert ('Data Belum Lengkap');
            header ('paket.php');
        </script>
        " ;
    } else {
        move_uploaded_file($_FILES['gambar_item']['tmp_name'], $target_file);
        $save=mysqli_query($conn, "INSERT INTO attribut (id_item, nama_item, harga_item, kecepatan_item, peruntukan_item, spesial, kategori, keterangan, gambar_item, item_status) 
        VALUES ('$id_item','$nama_item','$harga_item','$kecepatan_item','$peruntukan_item','$spesial','$kategori','$keterangan','$file','1')"); 
        if(!$save) {
        echo "
        <script> 
            alert ('tidak tersimpan dan &nbsp;". htmlspecialchars($file). "&nbsp; gagal terunggah');
            header ('paket.php');
        </script>
        " ;
        } else {
        echo "
            <script>     
            alert ('tersimpan dan ". htmlspecialchars($file). " sukses terunggah');
            header ('paket.php');
            </script>
        " ;
        }
    }
}
?>
</html>
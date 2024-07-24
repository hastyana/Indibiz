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
    <link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.3.0/uicons-brands/css/uicons-brands.css'>
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
            <li class="nav-item">
                <a class="nav-link collapsed" href="paket.php" data-toggle="collapse" data-target="#collapseTwo"
                    aria-expanded="true" aria-controls="collapseTwo">
                    <span>Paket Internet</span>
                </a>
            </li>
            <li class="nav-item active">
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Pesanan</h1>                        
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr class="text-center">
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Email</th>
                                            <th>Whatsapp</th>
                                            <th>Pesanan</th>
                                            <th>Berlangganan</th>
                                            <th>Tanggal Berlangganan</th>
                                            <th>Tanggal Konfirmasi</th>
                                            <th>Action Konfirmasi</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php                                         
                                        $data = mysqli_query($conn,"SELECT * FROM pesan ORDER BY id_pesan");
                                        $no = 1;
                                        while($d=mysqli_fetch_array($data)){
                                            echo "
                                            <tr>
                                                <td>$no</td>
                                                <td>$d[nama]</td>
                                                <td>$d[email]</td>
                                                <td>
                                                    0$d[telp]
                                                    <a href='https://api.whatsapp.com/send?phone=$d[telp]&text=Permisi bapak/ ibu, kami dari Indibiz. Tolong konfirmasi kepada kami apakah bapak/ibu ingin berlangganan Indibiz. Terima kasih telah bersedia klik berlangganan.  ' target='_blank' class='text-success'>
                                                        <i class='fi fi-brands-whatsapp'></i>
                                                    </a>
                                                </td>
                                                <td>$d[pesan]</td>
                                                <td>
                                                    $d[keterangan]
                                                </td>
                                                <td>
                                                    $d[tanggal_berlangganan]
                                                </td>
                                                <td>
                                                    $d[tanggal_konfirmasi]
                                                </td>
                                                <td align='center'>";
                                                    if($d['keterangan']==''){
                                                        echo "<a href='proses_pesan.php?id_user=$id_user&act=ya&id=$d[id_pesan]' onclick='return confirm('Yakin Berlangganan ?')' class='px-2 py-1 btn btn-success btn-icon-split'>Ya</a> <br> <br>
                                                            <a href='proses_pesan.php?id_user=$id_user&act=tidak&id=$d[id_pesan]' onclick='return confirm('Yakin Tidak Berlangganan ?')' class='px-2 py-1 btn btn-danger btn-icon-split'>Tidak</a>
                                                        ";
                                                    }else{
                                                        echo "-";
                                                    }
                                                echo "</td>
                                                <td class='text-center'>
                                                    <a href='delete_pesanan.php?id=$d[id_pesan]' onclick='return confirm('Yakin Dihapus ?')' class='px-2 py-1 btn btn-danger btn-icon-split'>
                                                    <i class='fi fi-rr-trash'></i></a>
                                                </td>
                                            </tr>";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
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

</html>
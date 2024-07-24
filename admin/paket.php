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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h2 class="mb-0 text-gray-800">Paket Internet Indihome</h2>                        
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-0 text-gray-800">Kategori</h4> 
                            <a href="create_kategori.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fi fi-rr-plus"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Kategori</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php                                            
                                        $data = mysqli_query($conn,"SELECT*FROM kategori ORDER BY id_kategori");
                                        $no = 1;
                                        while($d=mysqli_fetch_array($data)){
                                            echo "
                                            <tr>
                                                <td>$no</td>
                                                <td>$d[nama_kategori]</td>
                                                <td class='text-center'>
                                                    <a href='delete_kategori.php?id=$d[id_kategori]' class='px-2 py-1 btn btn-danger btn-icon-split'>
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
                    <div class="card shadow mb-4">
                        <div class="card-header py-3 d-sm-flex align-items-center justify-content-between">
                            <h4 class="mb-0 text-gray-800">Paket Internet</h4> 
                            <a href="create_paket.php" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                                <i class="fi fi-rr-plus"></i>
                            </a>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Item</th>
                                            <th>Harga</th>
                                            <th>Kecepatan</th>
                                            <th>Peruntukan</th>
                                            <th>Gambar</th>
                                            <th>Kategori</th>
                                            <th>Keterangan</th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        if (isset($_GET['pagination'])) {
                                                $pagination = $_GET['pagination'];
                                            } else {
                                                $pagination = 1;
                                            }
                                        $halaman = 100;
                                        $offset = ($pagination-1) * $halaman;
                                        $total_pages_sql = "SELECT COUNT(*) FROM attribut";
                                        $result = mysqli_query($conn,$total_pages_sql);
                                        $total_rows = mysqli_fetch_array($result)[0];
                                        $total_pages = ceil($total_rows / $halaman);
                                        $data = mysqli_query($conn, "SELECT * FROM attribut order by id_item LIMIT $offset, $halaman");
                                        $no=1;
                                        while($d=mysqli_fetch_array($data)){
                                            echo "<tr>
                                                    <td class='text-center'>$no</td>
                                                    <td>$d[nama_item]</td>
                                                    <td>$d[harga_item]</td>
                                                    <td>$d[kecepatan_item]</td>
                                                    <td>$d[peruntukan_item]</td>
                                                    <td><img src='../img/$d[gambar_item]' class='w-75'></td>
                                                    <td>$d[kategori]</td>
                                                    <td>$d[keterangan]</td>
                                                    <td class='text-center'>
                                                        <a href='delete_paket.php?id=$d[id_item]' class='px-2 py-1 btn btn-danger btn-icon-split'>
                                                        <i class='fi fi-rr-trash'></i></a>
                                                    </td>
                                                </tr>";
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                                <?php
                                    $paket = mysqli_query($conn,"SELECT * FROM attribut");
                                    $jml_paket = mysqli_num_rows($paket);
                                    ?>
                                    <p>Jumlah Paket Internet : <b><?php echo $jml_paket; ?></b> Paket</p> <br>
                                <nav>
                                    <ul class="pagination justify-content-center">
                                        <li class="page-item"><a class="page-link" href="?pagination=1">First</a></li>
                                        <li class="page-item <?php if($pagination <= 1){ echo 'disabled'; } ?>">
                                            <a class="page-link" href="<?php if($pagination <= 1){ echo '#'; } else { echo "?pagination=".($pagination - 1); } ?>">Prev</a>
                                        </li>
                                        <li class="page-item <?php if($pagination >= $total_pages){ echo 'disabled'; } ?>">
                                            <a class="page-link" href="<?php if($pagination >= $total_pages){ echo '#'; } else { echo "?pagination=".($pagination + 1); } ?>">Next</a>
                                        </li>
                                        <li class="page-item"><a class="page-link" href="?pagination=<?php echo $total_pages; ?>">Last</a></li>
                                    </ul>
                                </nav>
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
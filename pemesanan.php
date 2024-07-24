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
// if (!isset($_SESSION['username'], $_SESSION['id_user'], $_SESSION['nama_user'], $_SESSION['telp_user'], $_SESSION['email']) || $_SESSION['level'] !== 'user') {
//     header('location: index.php');
//     exit();
// }
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

    <header class="py-5 container col-5">
        <div class="row rounded bg-white">
            <div class="align-items-center justify-content-center">
                <h4 class="px-2 py-4 text-center">
                    Pemesanan
                </h4>
                <?php 
                $id=$_GET['id_item'];
                $query=mysqli_query($conn,"SELECT * FROM attribut WHERE id_item='$id'");
                while($data = mysqli_fetch_array($query)){
                    $nama = $_SESSION['nama_user'];
                    $telp = $_SESSION['telp_user'];
                    $email = $_SESSION['email'];
                    $id = $data['id_item'];
                    $harga = $data['harga_item'];
                    $kategori = $data['kategori'];
                    $nama_item = $data['nama_item'];
                ?>
                <form action="pemesanan.php" method="POST" onsubmit="return confirmSubmit()" enctype="multipart/form-data">
                    <input type="hidden" name="id_item" value="<?php echo $id; ?>">
                    <div class="form-group pb-4">
                        <label for="Nama">Nama</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Enter Name" value="<?php echo $nama; ?>">
                    </div>
                    <div class="form-group pb-4">
                        <label for="Email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="Enter Email" value="<?php echo $email; ?>">
                    </div>
                    <div class="col-auto">
                        <label class="sr-only form-label" for="inlineFormInputGroup">Nomor Telepon</label>
                        <div class="input-group mb-2">
                            <div class="input-group-prepend">
                                <div class="input-group-text">+62</div>
                            </div>
                            <input type="text" class="form-control" id="inlineFormInputGroup" id="telp" name="telp" value="<?php echo $telp; ?>">
                        </div>
                    </div>
                    <div class="form-group pb-4">
                        <label for="pesan">Nama Paket</label>
                        <input type="text" readonly class="form-control" id="pesan" name="pesan" value="<?php echo $nama_item; ?>">
                    </div>
                    <div class="form-group pb-4">
                        <label for="kategori">Jenis Paket</label>
                        <input type="text" disabled class="form-control" id="kategori" name="kategori" value="<?php echo $kategori; ?>">
                    </div>
                    <div class="form-group pb-4">
                        <label for="harga_item">Harga Paket</label>
                        <input type="text" disabled class="form-control" id="harga_item" name="harga_item" value="<?php echo $harga; ?>">
                    </div>
                    <div class="pb-4">
                        <a href="pemesanan.php"><input class ="btn btn-danger btn-icon-split py-1 px-2" type="submit" name="Kirim" value="Kirim"> </a>
                    </div>
                </form>
                <?php } ?>
            </div>
        </div>
    </header>

    <footer class="pt-5 bg-primary">
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

<!-- PHP Logic -->
<?php
    if(isset($_POST['Kirim'])){
        $id_user=$_SESSION['id_user'];
        $nama=$_POST['nama'];
        $email=$_POST['email'];
        $telp=$_POST['telp'];
        $pesan=$_POST['pesan'];
        $insert = mysqli_query($conn, "INSERT INTO pesan (id_pesan, id_user, nama, email, telp, pesan) VALUES ('$id_pesan','$id_user','$nama','$email','$telp','$pesan')");
        if(!$insert) {
            echo "
            <script> 
                alert ('Pesanan gagal terkirim');
                header ('location:product.php');
            </script>
            " ;
            } else {
            echo "
                <script>     
                alert ('Pesanan telah terkirim, segera kami proses');
                header ('location:product.php');
                </script>
            " ;
        }
    }
?>

<!-- confirmsubmit -->
<script>
    function confirmSubmit () {
        var r = confirm ('Yakin dengan pilihan anda ?');
        if (r) {
            return true;
        } else {
            return false;
        }
    }
</script>

</html>
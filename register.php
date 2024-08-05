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
?>

<body class="bg-white">
    <section class="vh-100">
        <div class="container py-5 h-100">
            <div class="row d-flex align-items-center justify-content-center h-100">
                <div class="col-md-8 col-lg-7 col-xl-6">
                    <img src="img/index.png" class="img-fluid" alt="Phone image">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 py-5">
                    <h4 class="pb-2">
                        Register
                    </h4>
                    <form action="" method="POST" enctype="multipart/form-data">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="username">Nama <span class="text-danger">*</span> </label>
                            <input type="text" id="nama_user" name="nama_user" class="form-control form-control-lg" required />
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="email">Email <span class="text-danger">*</span> </label>
                            <input type="email" id="email" name="email" class="form-control form-control-lg" required />
                        </div>
                        <div class="col-auto">
                            <label class="sr-only form-label" for="inlineFormInputGroup">Nomor Telepon <span class="text-danger">*</span> </label>
                            <div class="input-group mb-2">
                                <div class="input-group-prepend">
                                    <div class="input-group-text">+62</div>
                                </div>
                                <input type="text" class="form-control" id="inlineFormInputGroup" id="telp_user" name="telp_user" required>
                            </div>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="username">Username <span class="text-danger">*</span> </label>
                            <input type="text" id="username" name="username" class="form-control form-control-lg" required/>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="password">Password <span class="text-danger">*</span> </label>
                            <input type="password" id="password" name="password" class="form-control form-control-lg" required/>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <a href="index.php" class="text-black navbar-brand link-danger link-offset-2">
                                sudah punya akun ? <span class="fw-bold">Login sekarang</span>
                            </a>
                        </div>
                        <a href="register.php"> 
                            <input class ="btn btn-outline-primary btn-icon-split py-2 px-5" type="submit" name="Simpan" value="Register"> 
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

<!-- PHP Logic -->
<?php
    if(isset($_POST['Simpan'])){
        $nama_user=$_POST['nama_user'];
        $email=$_POST['email'];
        $telp_user=$_POST['telp_user'];
        $username=$_POST['username'];
        $password=$_POST['password'];
        $tgl=date('Y-m-d');
        $insert = mysqli_query($conn, "INSERT INTO user (id_user, username, email, password, nama_user, telp_user, level) VALUES ('$id_user','$username','$email','$password','$nama_user','62$telp_user','user')");
        if($insert){
            echo'<script> 
            alert ("Sukses... Akun sudah terdaftar");
            header ("register.php");
            </script>';
        } else if($nama_user == ""){
            echo'<script> 
            alert ("Nama harus diisi");
            header ("register.php");
            </script>';
        } else if($email == ""){
            echo'<script> 
            alert ("Email harus diisi menggunakan @");
            header ("register.php");
            </script>';
        } else if($telp_user == ""){
            echo'<script> 
            alert ("Nomor telepon harus diisi");
            header ("register.php");
            </script>';
        } else if($username == ""){
            echo'<script> 
            alert ("Username harus diisi");
            header ("register.php");
            </script>';
        } else if($password == ""){
            echo'<script> 
            alert ("Password harus diisi");
            header ("register.php");
            </script>';
        } else{
            echo 'Gagal upload';
        }
    }
?>

</html>

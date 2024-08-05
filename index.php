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
                    <img src="img/index.png" class="img-fluid" alt="" height="full" width="full">
                </div>
                <div class="col-md-7 col-lg-5 col-xl-5 offset-xl-1 py-5">
                    <h4 class="pb-2">
                        Login
                    </h4>
                    <form action="login_process.php" method="POST">
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="username">Username <span class="text-danger">*</span> </label>
                            <input type="text" name="username" class="form-control form-control-lg" required/>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <label class="form-label" for="password">Password <span class="text-danger">*</span> </label>
                            <input type="password" name="password" class="form-control form-control-lg" required/>
                        </div>
                        <div data-mdb-input-init class="form-outline mb-4">
                            <a href="register.php" class="text-black navbar-brand link-danger link-offset-2">
                                belum punya akun ? <span class="fw-bold">Register sekarang</span>
                            </a>
                        </div>
                        <input type="submit" name="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-outline-primary" value="LOGIN"></input>
                    </form>
                </div>
            </div>
        </div>
    </section>
</body>

</html>

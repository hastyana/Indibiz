<?php

include "connection.php";
session_start();
error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password']; 
$login = mysqli_query($conn,"select * from user where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);
if($cek > 0){
	$data = mysqli_fetch_assoc($login);
	$_SESSION['id_user'] = $data['id_user'];
	$_SESSION['nama_user'] = $data['nama_user'];
	$_SESSION['telp_user'] = $data['telp_user'];
	$_SESSION['email'] = $data['email'];
	if($data['level']=="admin"){
		$_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		$_SESSION['level'] = "admin";
		header("location:admin/index.php");
	}else if($data['level']=="user"){
		$_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
		$_SESSION['level'] = "user";
		header("location:home.php");
	}else{
		header("location:index.php?pesan=gagal");
	}	
}else{
	header("location:index.php?pesan=gagal");
}

?>
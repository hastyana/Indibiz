<?php
    include "../connection.php";
    $delete = mysqli_query($conn,"DELETE FROM kategori WHERE id_kategori='".$_GET['id']."'");
    if($delete){
        header('location:paket.php');
    }else{
        echo 'GAGAL HAPUS';
    }
?>

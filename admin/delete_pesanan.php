<?php
    include "../connection.php";
    $delete = mysqli_query($conn,"DELETE FROM pesan WHERE id_pesan='".$_GET['id']."'");
    if($delete){
        header('location:pesanan.php');
    }else{
        echo 'GAGAL HAPUS';
    }
?>

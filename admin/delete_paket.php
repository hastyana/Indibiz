<?php
    include "../connection.php";
    $select = mysqli_query($conn, "SELECT*FROM attribut WHERE id_item='".$_GET['id']."'");
    $data = mysqli_fetch_array($select);
    $img = $data['gambar_item'];
    unlink('../img/.'.$img);
    $delete = mysqli_query($conn,"DELETE FROM attribut WHERE id_item='".$_GET['id']."'");
    if($delete){
        header('location:paket.php');
    }else{
        echo 'GAGAL HAPUS';
    }
?>

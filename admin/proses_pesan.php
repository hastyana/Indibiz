<?php
    include '../connection.php';
    session_start();
    error_reporting(0);
    if($_GET['act']=='ya'){        
        $id_pesan = $_GET['id'];
        $id_user = $_GET['id_user'];
        //tgl konfirmasi
        $tglKonfirm = date('Y-m-d');
        mysqli_query($conn,"UPDATE pesan SET keterangan='Berlangganan',
                            tanggal_konfirmasi='$tglKonfirm'
                            WHERE id_pesan='$id_pesan'");
        header("location:pesanan.php");    
    }elseif($_GET['act']=='tidak'){        
        $id_pesan = $_GET['id'];
        $id_user = $_GET['id_user'];
        //tgl konfirmasi
        $tglKonfirm = date('Y-m-d');
        mysqli_query($conn,"UPDATE pesan SET keterangan='Tidak Berlangganan',
                            tanggal_konfirmasi='$tglKonfirm'
                            WHERE id_pesan='$id_pesan'");
        header("location:pesanan.php");    
    }
?>
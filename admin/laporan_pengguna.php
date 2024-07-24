<?php 

session_start();
error_reporting(0);
include '../connection.php'; 

?>

<html>
    <head>
        <title></title>
        <style type="text/css">
            body{
                font-family:Arial;
            }
            @media print{
                .no-print{
                    display:none;
                }
            }
            table{
                border-collapse:collapse;
            }
        </style>
    </head>
    <body>

    <?php 
    $title=$_GET['laporan'];
    ?>
    <h3 class="text-uppercase">Laporan Pengguna Indibiz <?php echo $title; ?></h3>
    <hr/>
    <table width="100%" class="border-1 border-black p-4 table" border="1" cellspacing="0" cellpadding="4">
        <tr>
            <td>No</td>
            <td>Nama User</td>
            <td>Whatsapp</td>
            <td>Paket Layanan</td>
            <td>Keterangan</td>
            <td>Tanggal Konfirmasi</td>
        </tr>
        <?php   
        // if($_GET['laporan']=='none'){
        //     $sqlKonfirm = mysqli_query($conn, "SELECT * FROM user WHERE tanggal BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' 
        //                     AND level='user' AND ket='$_GET[laporan]' ORDER BY id_user");
        //     $no=1;
        //     while($d=mysqli_fetch_array($sqlKonfirm)){
        //         echo "<tr>
        //                 <td align='end'>$no</td>
        //                 <td>$d[nama_user]</td>
        //                 <td>$d[telp_user]</td>
        //                 <td>-</td>
        //                 <td>Registrasi</td>
        //                 <td>$d[tanggal]</td>
        //             </tr>";
        //             $no++;
        //     };
        // }else{
        //     $sqlKonfirm = mysqli_query($conn, "SELECT pesan.*,user.id_user,user.nama_user,user.telp_user
        //                     FROM pesan INNER JOIN user ON pesan.id_user=user.id_user
        //                     WHERE tanggal_konfirmasi BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' AND keterangan='$_GET[laporan]'
        //                     ORDER BY id_pesan ASC");
        //     $no=1;
        //     while($d=mysqli_fetch_array($sqlKonfirm)){
        //         echo "<tr>
        //                 <td align='end'>$no</td>
        //                 <td>$d[nama_user]</td>
        //                 <td>$d[telp_user]</td>
        //                 <td>$d[pesan]</td>
        //                 <td>$d[keterangan]</td>
        //                 <td>$d[tanggal_konfirmasi]</td>
        //             </tr>";
        //             $no++;
        //     };
        // }

            $sqlKonfirm = mysqli_query($conn, "SELECT pesan.*,user.id_user,user.nama_user,user.telp_user
            FROM pesan INNER JOIN user ON pesan.id_user=user.id_user
            WHERE tanggal_konfirmasi BETWEEN '$_GET[tgl1]' AND '$_GET[tgl2]' AND keterangan='$_GET[laporan]'
            ORDER BY id_pesan ASC");
            $no=1;
            while($d=mysqli_fetch_array($sqlKonfirm)){
            echo "<tr>
                <td align='end'>$no</td>
                <td>$d[nama_user]</td>
                <td>$d[telp_user]</td>
                <td>$d[pesan]</td>
                <td>$d[keterangan]</td>
                <td>$d[tanggal_konfirmasi]</td>
            </tr>";
            $no++;
            };
        ?>
    </table>

    <table width="100%">
        <tr>
            <td></td>
            <td width="200%">
                <br/>
                <p>Klaten, ............., <?php echo date('d/m/y');?></p>
                <br/>
                <br/>
                <p>......................</p>
            </td>
        </tr>
    </table>
    <script>
        window.print();
    </script>
    </body>
    </html>
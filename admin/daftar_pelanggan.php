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
    <h3>LAPORAN PENGGUNA INDIBIZ</h3>
    <hr/>
    <table width="100%" class="border-1 border-black p-4 table" border="1" cellspacing="0" cellpadding="4">
        <tr>
            <td>No</td>
            <td>Nama User</td>
            <td>Whatsapp</td>
            <td>Email</td>
            <td>Tanggal Registrasi</td>
        </tr>
        <?php
            $sqlKonfirm = mysqli_query($conn, "SELECT * FROM user WHERE level='user' ORDER BY id_user");
            $no=1;
            while($d=mysqli_fetch_array($sqlKonfirm)){
            echo "<tr>
                <td align='end'>$no</td>
                <td>$d[nama_user]</td>
                <td>$d[telp_user]</td>
                <td>$d[email]</td>" ?>
                <td><?php echo date('d-m-Y', strtotime($d['tanggal'])); ?></td> <?php
            "</tr>";
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
<?php
    $nama = "";
    $username = "";
    $password = "";

    $ErrorNama = "";
    $ErrorUsername = "";
    $ErrorPassword = "";

    $notifBerhasil = "";
    $notifGagal = "";
    
    if(isset($_POST['sumbit'])){
        $nama = trim($_POST['nama']);
        $username = trim($_POST['username']);
        $password = trim($_POST['password']);
        
        if(empty($nama)){
            $ErrorNama = "<font color='red'>Nama belum diisi!!</font>";
        }
        if(empty($username)){
            $ErrorUsername = "<font color='red'>Username belum diisi!!</font>";
        }
        if(empty($password)){
            $ErrorPassword = "<font color='red'>Password belum diisi!!</font>";
        }
        if(!empty($nama) and !empty($username) and !empty($password)){
            $notifBerhasil = "<font color='green'>Registrasi Berhasil!!</font>";
        }
        if(empty($nama) or empty($username) or empty($password)){
            $notifGagal = "<font color='red'>Registrasi Gagal!!</font>";
        }
    }
?>

<html>
    <head>  
        <title>Form Registrasi</title>
        <link rel="stylesheet" type="text/css" href="styleRegister.css">
    </head>
    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 11 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="container">
            <div class="judul">Data Register</div>
            <hr>
            <?= $notifBerhasil; ?><?= $notifGagal; ?><br/>
            <table>
                <tr class="putih">
                    <td>Nama</td>
                    <td>:</td>
                    <td><?= $nama; ?><?= $ErrorNama; ?></td>
                </tr>
                <tr class="putih">
                    <td>Username</td>
                    <td>:</td>
                    <td><?= $username; ?><?= $ErrorUsername; ?></td>
                </tr>
                <tr class="putih">
                    <td>Password</td>
                    <td>:</td>
                    <td><?= $password; ?><?= $ErrorPassword; ?></td>
                </tr>
                <tr>
                    <td><input type="button" onclick="history.back()" value="Kembali" class="kirim"></td>
                </tr>
            </table>
        </div>
    </body>
</html>

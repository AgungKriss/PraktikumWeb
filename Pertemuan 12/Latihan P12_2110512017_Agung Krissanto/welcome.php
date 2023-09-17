<?php
    // session dimulai
    session_start();
    // cek session untuk memeriksa user telah melakukan login atau belum
    if (!isset($_SESSION['username'])) { // jika tidak ada session username
        header("location: index.php"); // redirect ke halaman index.php
    }
?>

<html>
    <head>
        <title>Halaman Setelah Login</title>
        <link rel="stylesheet" type="text/css" href="styleForm.css">
    </head>
    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 11 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="containers">
            <h1 class="putih">Selamat datang <?php echo $_SESSION['nama']; ?></h1>
            <hr>
            <h4 class="putih">Anda berhasil login ke dalam aplikasi.</h4>
            <a href="logout.php" class="kirims">Logout</a>
        </div>
    </body>
</html>
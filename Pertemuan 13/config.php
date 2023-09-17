<?php
    $server = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'db_penyimpanan';

    $conn = mysqli_connect($server, $username, $password, $database);

    if (!$conn) {
        die('Koneksi Database Gagal : ' . mysqli_connect_error());
    }
?>
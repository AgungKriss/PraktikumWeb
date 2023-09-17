<?php
    include("config.php");

    // fungsi PHP untuk menghapus file
    $path = "file/";
    $idBuku = $_GET['idBuku'];

    // hapus data dari table
    $query = "DELETE from buku WHERE idBuku=$idBuku";
    $result = mysqli_query($conn, $query);
    if ($query) {
        // hapus data dari direktori
        unlink($path . $_GET['filename']);
        header("Location: home.php");
    } else {
        die("Gagal Menghapus Data");
    }
?>
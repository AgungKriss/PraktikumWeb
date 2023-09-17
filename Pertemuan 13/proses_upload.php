<html>
    <head>
        <title>Proses</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body class="putih">
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 11 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="">
            <?php
                include("config.php");

                if (isset($_POST['upload'])) {
                    date_default_timezone_set("Asia/Jakarta");
                    $tanggal = date("Ymd");
                    // ambil informasi dari file yang diupload
                    $tmp_file = $_FILES['foto']['tmp_name'];
                    $nama_file = $_FILES['foto']['name'];
                    $ukuran_file = $_FILES['foto']['size'];
                    $judul = $_POST['judul'];

                    $fotoData = addslashes(file_get_contents($_FILES['foto']['tmp_name']));
                    $fotoProp = getimagesize($_FILES['foto']['tmp_name']);

                    $isbn = $_POST['isbn'];
                    $tahun_terbit = $_POST['tahunTerbit'];
                    $harga = $_POST['harga'];
                    $stok = $_POST['stok'];
                    $penerbit = $_POST['penerbit'];
                    $penulis = $_POST['penulis'];
                    $size = 10000000; // limit 10 MB

                    if ($ukuran_file > $size) {
                        echo "<strong>Gagal upload! <br>Ukuran Maksimal 10MB, saat ini ukuran file " . $ukuran_file . "</strong>";
                        echo "<a href='form_upload.php'>Upload ulang</a>";
                        exit();
                    } else {
                        if ($nama_file) {
                            $dir = "file/$nama_file";
                            move_uploaded_file($tmp_file, $dir);

                            $sql = "INSERT INTO buku(judul, foto, namaFile, isbn, tahunTerbit, harga, stok, penerbit, penulis) VALUES ('$judul', '$fotoData', '$nama_file', '$isbn', '$tahun_terbit', '$harga', '$stok', '$penerbit', '$penulis')";
                            $query = mysqli_query($conn, $sql) or die(mysqli_error($conn));

                            echo "<h4 class='container'>$judul</h4> <h4 class='container'>berhasil di upload!</h4>
                            <br>";
                            echo "<a href='home.php' class='next'>Lihat Daftar Buku</a>";
                        } else {
                            echo "<h4 class='container'>Gagal upload!</h4><br>";
                            echo "<a class='next' href='form_upload.php'>Upload ulang</a>";
                        }
                    }
                }
            ?>
        </div>
    </body>
</html>
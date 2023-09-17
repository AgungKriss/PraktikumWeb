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
        <title>Home</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 11 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="containers">
            <div class="putih">
                <h2>Selamat datang <b><?php echo $_SESSION['nama']; ?></h2>
            </div>
            <div class="row">
                <div class="">
                    <?php
                        include('config.php');
                        $sql = 'SELECT buku.idBuku, buku.judul, buku.foto, buku.namaFile, buku.isbn, buku.tahunTerbit, buku.harga, buku.stok, penerbit.idPenerbit, penerbit.namaPenerbit, penulis.idPenulis, penulis.namaPenulis
                        FROM ((buku
                        INNER JOIN penerbit ON buku.penerbit = penerbit.idPenerbit)
                        INNER JOIN penulis ON buku.penulis = penulis.idPenulis)
                        ORDER BY buku.idBuku DESC';
                        $result = mysqli_query($conn, $sql);

                        if (!$result) {
                            die('Could not get data: ' . mysqli_error($conn));
                        }

                        echo "<a href='form_upload.php'><button type='button' class='upload'>+ Tambah Data</button></a>";
                        echo "<br><br>";
                        echo "<table border='1px' cellpadding='10px' class='putih'>";
                        echo "<thead>";
                        echo "<tr>";
                        echo "<th scope='col'>Nomor</th>";
                        echo "<th scope='col'>Judul</th>";
                        echo "<th scope='col'>Foto</th>";
                        echo "<th scope='col'>ISBN</th>";
                        echo "<th scope='col'>Tahun Terbit</th>";
                        echo "<th scope='col'>Harga</th>";
                        echo "<th scope='col'>Stok</th>";
                        echo "<th scope='col'>Penerbit</th>";
                        echo "<th scope='col'>Penulis</th>";
                        echo "<th scope='col' colspan='2'>Aksi</th>";
                        echo "</tr>";
                        echo "</thead>";

                        $i = 1;
                        echo "<tbody>";
                        while ($row = mysqli_fetch_array($result)) {
                            echo "<tr>";
                            echo "<td>" . $i . "</td>";
                            echo "<td>" . $row['judul'] . "</td>";
                            echo '<td>
                                <img width="100px" src="data:image/jpeg;base64,' . base64_encode($row['foto']) . '"/>
                            </td>';
                            echo "<td>" . $row['isbn'] . "</td>";
                            echo "<td>" . $row['tahunTerbit'] . "</td>";
                            echo "<td>" . $row['harga'] . "</td>";
                            echo "<td>" . $row['stok'] . "</td>";
                            echo "<td>" . $row['namaPenerbit'] . "</td>";
                            echo "<td>" . $row['namaPenulis'] . "</td>";
                            echo "<td> 
                                <a href='download.php?file_name={$row['namaFile']}'>
                                <button type='button' class='aksi'>Download</button>
                                </a>
                            </td>";
                            echo "<td>
                                <a href='delete.php?judul_buku={$row['judul']}&idBuku={$row['idBuku']}'>
                                <button type='button' class='aksi'>Delete</button>
                                </a>
                            </td>";
                            echo "</tr>";
                            $i++;
                        }
                        echo "</tbody>";

                        echo "</table>";
                        mysqli_close($conn);
                    ?>
                </div>
            </div>
            <a href="logout.php">
                <button type="button" class="kirims">Logout</button>
            </a>            
        </div>
    </body>
</html>
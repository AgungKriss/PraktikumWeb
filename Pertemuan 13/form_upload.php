<?php
    include('config.php');
    $sql_penerbit = 'SELECT * FROM penerbit ORDER BY namaPenerbit ASC';
    $result_penerbit = mysqli_query($conn, $sql_penerbit);

    $sql_penulis = 'SELECT * FROM penulis ORDER BY namaPenulis ASC';
    $result_penulis = mysqli_query($conn, $sql_penulis);

    if (!$result_penerbit) {
        die('Could not get data: ' . mysqli_error($conn));
    }
    if (!$result_penulis) {
        die('Could not get data: ' . mysqli_error($conn));
    }
?>

<html>
    <head>
        <title>Form Upload</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 11 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="containers">
                <div class="putih">
                    <h2 class="judul">Form Upload Buku</h2>
                    <hr/>
                    <form method="POST" action="proses_upload.php" enctype="multipart/form-data">
                        <table class="putih" cellpadding="5px" width="98%" margin="10px">
                            <tr>
                                <td><label for="judul">Judul</label></td>
                                <td><input type="text" class="box" name="judul" id="judul" aria-describedby="judulHelp"></td>
                            </tr>
                            <tr>
                                <td><label for="foto">Foto</label></td>
                                <td><input type="file" class="box" name="foto" id="foto" aria-describedby="fotoHelp"></td>
                            </tr>
                            <tr>
                                <td><label for="isbn">ISBN</label></td>
                                <td><input type="text" class="box" name="isbn" id="isbn" aria-describedby="isbnHelp"></td>
                            </tr>
                            <tr>
                                <td><label for="tahunTerbit">Tahun Terbit</label></td>
                                <td><input type="text" class="box" name="tahunTerbit" id="tahunTerbit" aria-describedby="tahunTerbitHelp"></td>
                            </tr>
                            <tr>
                                <td><label for="harga">Harga</label></td>
                                <td><input type="number" class="box" name="harga" id="harga" aria-describedby="hargaHelp"></td>
                            </tr>
                            <tr>
                                <td><label for="stok">Stok</label></td>
                                <td><input type="number" class="box" name="stok" id="stok" aria-describedby="judulHelp"></td>
                            </tr>
                            <tr>
                                <td><label for="penerbit">Penerbit</label></td>
                                <td>
                                    <select name="penerbit" id="penerbit" class="box" aria-label="Default select example">
                                        <option selected>Pilih Penerbit</option>
                                        <?php
                                            while ($row = mysqli_fetch_array($result_penerbit)) {
                                                echo '<option value="' . $row['idPenerbit'] . '">' . $row['namaPenerbit'] . '</option>';
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="penulis">Penulis</label></td>
                                <td>
                                    <select name="penulis" id="penulis" class="box" aria-label="Default select example">
                                        <option selected>Pilih Penulis</option>
                                        <?php
                                            while ($row = mysqli_fetch_array($result_penulis)) {
                                                echo '<option value="' . $row['idPenulis'] . '">' . $row['namaPenulis'] . '</option>';
                                            }
                                        ?>
                                    </select>
                                </td>
                            </tr>
                        </table>
                        <?php
                            mysqli_close($conn);
                        ?>

                        <div>
                            <input class="upload" name="upload" type="submit" value="Upload">
                            <input class="upload" name="cancel" type="reset" value="Reset">
                            <a href='home.php'>
                                <button type='button' class='upload'>Batal</button>
                            </a>
                        </div>
                    </form>
                </div>
        </div>
    </body>
</html>
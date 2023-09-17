<?php
    $nama = $_POST['nama'];
    $jk = $_POST['jk'];
    $prodi = $_POST['prodi'];
    $hobi = $_POST['hobi'];
    $pesan = $_POST['pesan'];

?>
<html>
    <head>
        <title>TAMPILAN BUKU TAMU</title>
        <link rel="stylesheet" type="text/css" href="styleBukuTamu.css">
    </head>
    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 10 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="container">
            <h3 class="judul">ISI BUKU TAMU :</h3>
            <hr>
            <table>
                <tr class="putih">
                    <td>Nama</td>
                    <td>:</td>
                    <td><?php echo $nama; ?></td>
                </tr>
                <tr class="putih">
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?php echo $jk; ?></td>
                </tr>
                <tr class="putih">
                    <td>Program Studi</td>
                    <td>:</td>
                    <td><?php echo $prodi; ?></td>
                </tr>
                <tr class="putih">
                    <td valign="top">Hobi</td>
                    <td valign="top">:</td>
                    <td>
                        <?php
                            if(!empty($hobi)){
                                echo "<ul>";

                                foreach($hobi as $value){
                                    echo "<li>$value</li>";
                                }
                                echo"</ul>";
                            }
                        ?>
                    </td>
                </tr>
                <tr class="putih">
                    <td>Pesan</td>
                    <td>:</td>
                    <td><?php echo $pesan; ?></td>
                </tr>
            </table>
        </div>
    </body>
</html>
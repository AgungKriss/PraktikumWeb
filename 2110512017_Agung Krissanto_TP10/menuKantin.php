<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Menu Kantin</title>
        <link rel="stylesheet" type="text/css" href="styleMenu.css">
    </head>
    <body>
        <!-- variabel menu -->
        <?php
            $menu1 = "Nasi";
            $menu2 = "Ikan Bakar";
            $menu3 = "Ayam Bakar";
            $menu4 = "Sayur Lodeh";
            $menu5 = "Tumis Kangkung";
        ?>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 10 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="container">
            <div class="judul">Daftar Menu di Kantin Mamah Dedeh</div><br/>
            <!-- Data untuk dilempar ke window baru -->
            <form action="prosesMenuKantin.php" method="POST">
                <!-- Menu untuk menampilkan inputan -->
                <table>
                    <tr>
                        <td>
                            <input type="checkbox" name="menu[]" value="Nasi" id="menu">
                            <?= $menu1 ?>
                        </td>
                        <td class="kanan">Rp. 2000,-</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="menu[]" value="Ikan Bakar" id="menu">
                            <?= $menu2 ?>
                        </td>
                        <td class="kanan">Rp. 3000,-</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="menu[]" value="Ayam Bakar" id="menu">
                            <?= $menu3 ?>
                        </td>
                        <td class="kanan">Rp. 4000,-</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="menu[]" value="Sayur Lodeh" id="menu">
                            <?= $menu4 ?>
                        </td>
                        <td class="kanan">Rp. 2000,-</td>
                    </tr>
                    <tr>
                        <td>
                            <input type="checkbox" name="menu[]" value="Tumis Kangkung" id="menu">
                            <?= $menu5 ?>
                        </td>
                        <td class="kanan">Rp. 2000,-</td>
                    </tr>
                    <tr>
                        <td>
                            <label for="">Nama Anda : </label>
                        </td>
                        <td class="kanan">
                            <input type="text" name="nama" class="warna">
                        </td>
                    </tr>
                </table>
                <br/>
                
                <input type="submit" value="Bayar Sekarang" class="kirim">
            </form>
        </div>
    </body>
</html>
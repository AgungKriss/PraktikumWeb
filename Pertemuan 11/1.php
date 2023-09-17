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
            <div class="judul">Form Register</div>
            <hr>
            <form action="1_2.php" method="POST">
                <table>
                    <tr class="putih">
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type="text" name="nama" class="box"></td>
                    </tr>
                    <tr class="putih">
                        <td>Username</td>
                        <td>:</td>
                        <td><input type="text" name="username" class="box"></td>
                    </tr>
                    <tr class="putih">
                        <td>Password</td>
                        <td>:</td>
                        <td><input type="password" name="password" class="box"></td>
                    </tr>
                    <tr>
                        <td><input type="submit" name="sumbit" value="Register" class="kirim"></td>
                    </tr>
                </table>
            </form>
        </div>
    </body>
</html>
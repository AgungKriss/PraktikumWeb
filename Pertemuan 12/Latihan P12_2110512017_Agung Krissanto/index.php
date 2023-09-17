<?php
    session_start();

    if(isset($_SESSION['username'])){
        header('location:welcome.php');
    }
?>

<html>
    <link rel="stylesheet" type="text/css" href="styleForm.css">
    <title>Login</title>
    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 11 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="container">
            <div class="judul">Form Login</div>
            <hr>
            <div style="color:#dc2f02; margin-bottom:15px">
                <?php
                    if(isset($_COOKIE['message'])){
                        echo $_COOKIE['message'];
                    }
                ?>
            </div>
            <form method="post" action="login.php">
                <label class="putih">Username</label><br />
                <input type="text" name="username" placeholder="Username" class="box"/><br /><br/>
                <label class="putih">Password</label><br />
                <input type="password" name="password" placeholder="Password" class="box"/><br/><br />
                <input type="submit" name="login" value="Login" class="kirim"/>
                <input type="reset" name="cancel" value="Batal" class="kirim"/>
            </form>
        </div>
    </body>
</html>
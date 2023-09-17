<?php
    session_start();
    if (isset($_SESSION["username"])) {
        header('location: home.php');
    }
?>

<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" type="text/css" href="style.css">
    </head>

    <body>
        <marquee direction="left" class="line">
            Latihan Praktikum Pemrograman Web Pertemuan 11 - 2110512017 - Agung Krissanto
        </marquee>
        <div class="container">
            <div>
                <h1 class="judul">Welcome to D'Book</h1>
                <hr/>
                <div>
                    <?php
                        if (isset($_COOKIE['message'])) {
                            echo $_COOKIE['message'];
                        }
                    ?>
                </div>

                <form method="POST" action="login.php">
                    <div>
                        <label for="username" placeholder="Username" class="putih">Username</label>
                        <input type="text" name="username" id="username" class="box" aria-describedby="usernameHelp">
                    </div>
                    <br/>
                    <div>
                        <label for="password" placeholder="Password" class="putih">Password</label>
                        <input type="password" name="password" id="password" class="box">
                    </div>
                    <div>
                        <button type="submit" name="login" class="kirim">Submit</button>
                        <button type="reset" name="cancel" class="kirim">Batal</button>
                    </div>
                </form>
            </div>
        </div> 
    </body>
</html>
<?php
$cookie_name="user";
$cookie_value="agung";
setcookie($cookie_name, $cookie_value, time()+(86400 *30), '/');
?>

<html>
    <body>
        <?php
        if(!isset($_COOKIE[$cookie_name])){
            echo "Cookie nama: " .$cookie_name . " belum dibuat!";
        } else {
            echo "Cookie " . $cookie_name . " sudah dibuat<br>";
            echo "Value adalah: " . $_COOKIE[$cookie_name];
        }
        ?>
    </body>
</html>
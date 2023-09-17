<?php
    session_start();
    $_SESSION['username'] = 'admin';
    $_SESSION['password'] = '123';
    
    echo "Session Berhasil dibuat!<br/><br/>";
    echo 'username = ' . $_SESSION['username'] . '<br/>';
    echo 'password = ' . $_SESSION['password'] . '<br/><br/>';

    session_unset();
    session_destroy();

    echo 'username = ' . $_SESSION['username'] . '<br/>';
    echo 'password = ' . $_SESSION['password'] . '<br/><br/>';
?>
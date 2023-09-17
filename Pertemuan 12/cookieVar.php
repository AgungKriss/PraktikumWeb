<?php
    session_start();

    $_SESSION['username'] = 'admin';
    $_SESSION['password'] = '123';

    echo 'username = ' . $_SESSION['username'] . '<br/>';
    echo 'password = ' . $_SESSION['password'] . '<br/><br/>';
    
    $_SESSION['username'] = 'admin';
    $_SESSION['password'] = '123asd';

    echo 'username = ' . $_SESSION['username'] . '<br/>';
    echo 'password = ' . $_SESSION['password'] . '<br/><br/>';
?>
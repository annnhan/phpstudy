<?php
    setcookie('user', 'hanan', time()+3600);
    echo 'user:' . $_COOKIE['user'];
?>
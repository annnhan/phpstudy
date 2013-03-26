<?php
$con = mysql_connect('localhost:3306', 'root', 'password');
if($con){
    echo 'connect sessuces<br>';
}
mysql_close($con);
?>

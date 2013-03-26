<?php
$sql_host = 'localhost:3306';
$con = mysql_connect($sql_host, 'root', 'password');

if (!$con){
    echo 'can not connect:' . mysql_error();
}else{
    mysql_select_db('student',$con);
    $sql = "DELETE FROM family WHERE name = 'lishouyan'";
    $r = mysql_query($sql, $con);
    if ($r) {
        echo "ok";
    }else{
        echo 'error:' . mysql_error();
    }
    mysql_close($con);
}
?>
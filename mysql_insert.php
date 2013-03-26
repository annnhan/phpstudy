<?php
$sql_host = 'localhost:3306';
$con = mysql_connect($sql_host, 'root', 'password');
if ($con) {
    mysql_select_db('mydb',$con);
    $sql =  "INSERT INTO Persons(Firename, Lastname, Age)
            VALUES ('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";
    $r = mysql_query($sql, $con);
    if ($r) {
        echo 'insert success.';
    }else{
        echo 'error:' . mysql_error();
    }
}else{
    echo 'can not connect:' . mysql_error();
}
?>

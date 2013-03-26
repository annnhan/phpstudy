<?php
$sql_host = 'localhost:3306';
$con = mysql_connect($sql_host, 'root', 'password');
if ($con) {

    // creat db
//    if ( mysql_query('CREATE DATABASE mydb', $con) ) {
//        echo 'create database success';
//    }else {
//        echo 'create database failed：' . mysql_error();
//    }

    // creat table
    mysql_select_db('mydb',$con);
    $sql = 'CREATE TABLE Persons(
        Firename varchar(15),
        Lastname varchar(15),
        Age int
    )';
    mysql_query($sql, $con);
    mysql_close($con);
}else{
    echo 'can not connect:' . mysql_error();
}
?>

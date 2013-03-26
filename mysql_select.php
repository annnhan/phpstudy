<?php
$sql_host = 'localhost:3306';
$con = mysql_connect($sql_host, 'root', 'password');

if (!$con){
    echo 'can not connect:' . mysql_error();
}else{
    mysql_select_db('student',$con);
    $sql = "SELECT * FROM family ORDER BY age";
    $r = mysql_query($sql, $con);
    if ($r) {
        while($line = mysql_fetch_array($r)){
            echo "id:$line[id], name:$line[name], age:$line[age]" . "<br/>";
        }
    }else{
        echo 'error:' . mysql_error();
    }
    mysql_close($con);
}
?>

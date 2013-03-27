<?php
$sql_host = 'localhost:3306';
$con = mysql_connect($sql_host, 'root', 'password');
$name = $_GET['name'];
$age = $_GET['age'];
$sex = $_GET['sex'];
mysql_select_db('student', $con);
$sql = "SELECT * FROM family ";
$rdb = mysql_query($sql, $con);
$rdbarr = array();
while($row = mysql_fetch_array($rdb)){
    $r = array(
        'id'    => $row[id],
        'name'  => $row[name],
        'age'   => $row[age],
        'sex'   => $row[sex]
    );
    $rdbarr[] = $r;
}
echo json_encode($rdbarr);
?>

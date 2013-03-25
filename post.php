<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $_POST['name'] ?></title>
</head>
<body>
你输入的信息为：<br>
<?php
echo '<br>name:'.$_POST['name'];
echo '<br>age:'.$_POST['age'];
echo '<br>sex:'.$_POST['sex'];
$str = 'name:'.$_POST['name'].';age:'.$_POST['age'].';sex:'.$_POST['sex']."\n";
$f = fopen("pesen.txt", 'ab');
if($f){
    fwrite($f, $str);
    fclose($f);
}
?>
<br>
<a href="view.php">查看记录</a>
</body>
</html>


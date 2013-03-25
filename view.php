<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
$f = fopen("pesen.txt", 'rb');
while(!feof($f)){
    echo fgets($f).'<br>';
}
readfile("pesen.txt");
?>
</body>
</html>

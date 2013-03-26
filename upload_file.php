
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
if($_FILES['file']['error']>0){
    echo 'error: ' . $_FILES['file']['error'] . '<br>';
}
else{
    echo 'file: ' . $_FILES['file']['name'] . '<br>';
    echo 'type: ' . $_FILES['file']['type'] . '<br>';
    echo 'size: ' . $_FILES['file']['size'] . '<br>';
    echo 'tmp_name: ' . $_FILES['file']['tmp_name'] . '<br>';
    $file_name = 'upload' . rand(100000, 999999) . '_' . date('Ymdhis') . strstr($_FILES['file']['name'], '.');
    if(file_exists('upload/'.$file_name)){
        echo '<h3>文件已存在！</h3>';
    }else{
        move_uploaded_file($_FILES['file']['tmp_name'], 'upload/'.$file_name);
        echo '<img src="upload/'.$file_name . '">';
    }
}
?>
</body>
</html>
<?php
session_start();
if (isset($_SESSION['view'])) {
    $_SESSION['view'] += 1;
} else {
    $_SESSION['view'] = 1;
}
?>
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<?php
echo 'view:' . $_SESSION['view'];
?>
</body>
</html>
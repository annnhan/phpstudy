<?php
$arr = Array(1, 2, 3, 'a', 'b', 'c', array('z', 'x', 'y', 7, 8, 9));
$arr2 = Array('a'=>1, 'b'=>2, 'c'=>3);
class o {
    public $name = 'hanan';
    public $age = 29;
    public $sex = 'men';
    public $job = 'devleper';
}
$obj = new o();
$json_arr = json_encode($arr) ;
$json_arr2 = json_encode($arr2) ;
$json_obj = json_encode($obj) ;
echo $json_arr;
echo $json_arr2;
echo $json_obj;
echo json_decode($json_obj)->name;
?>

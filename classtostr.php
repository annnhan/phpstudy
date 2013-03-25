<?php

class obj {
    public $a = 1;
    public $b = 'b';
    public function __toString(){
        return (var_export($this, true));
    }
}
$o = new obj();
echo $o;
?>
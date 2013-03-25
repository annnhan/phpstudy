<?php

class page {
    public $title = 'my web';
    public $content ;
    public function __set($name, $value){
        $this->$name = $value;
    }
    public function display(){
        echo '<!DOCTYPE HTML>'.
            '<html>'.
            '<head>'.
                '<meta charset="UTF-8">'.
                '<title>'.$this->title.'</title>'.
            '</head>'.
            '<body>'.
            $this->content.
            '</body>'.
            '</html>';
    }
}
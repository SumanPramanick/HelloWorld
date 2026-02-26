<?php
namespace HelloWorld;

class Hello{
    public function myfunction($name){
        $hexstr = bin2hex($name);     
        return "string => {$name} hex => {$hexstr}";
    }
}
?>
<?php

spl_autoload_register('myAutoloader');
function myAutoloader($className){
    include 'classes/' . $className . '.php';
}

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6)
];

var_dump($shapes);






require 'myHtml.php';
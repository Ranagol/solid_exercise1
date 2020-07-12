<?php

//https://scotch.io/bar-talk/s-o-l-i-d-the-first-five-principles-of-object-oriented-design

spl_autoload_register('myAutoloader');
function myAutoloader($className){
    include 'classes/' . $className . '.php';
}

$shapes = [
    new Circle(2),
    new Square(5),
    new Square(6)
];

$areaCalculator = new AreaCalculator($shapes);
echo $areaCalculator->sum();






require 'myHtml.php';
<?php

class Circle {
    public $radius;

    public function __construct($radius){
        $this->radius = $radius;
    }

    public function area(){
        return pow($this->radius, 2) * 3.14;
    }
}
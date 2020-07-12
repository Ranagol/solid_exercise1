<?php

class AreaCalculator {
    protected $shapes = [];

    public function __construct(array $shapes){
        $this->shapes = $shapes;
    }

    public function sum(){
        foreach ($this->shapes as $shape) {
            # code...
        }
    }

    public function output(){
        return "Sum of the areas of provided shapes: " . $this->sum();
    }
}
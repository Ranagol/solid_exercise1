<?php

class AreaCalculator {
    protected $shapes = [];

    public function __construct(array $shapes){
        $this->shapes = $shapes;
    }

    public function sum(){
        $sumOfAreas = 0;
        foreach ($this->shapes as $shape) {
           $sumOfAreas += $shape->area();
        }
        return $sumOfAreas;
    }


}
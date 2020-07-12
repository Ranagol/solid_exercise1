<?php

class AreaCalculator {
    protected $shapes = [];

    public function __construct(array $shapes){
        $this->shapes = $shapes;
    }

    public function sum(){
        $sumOfAreas = 0;
        foreach ($this->shapes as $shape) {
            if ($shape instanceof ShapeInterface) {
                $sumOfAreas += $shape->area();
            } else {
                echo 'One of the shapes is not instanceof ShapeInterface.';
            }

        }
        return $sumOfAreas;
    }


}
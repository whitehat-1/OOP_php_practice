<?php
//example:
// class Parent{

// }

// class Child extends Parent{ 

// }

class Car{
    private $model;
    public function setModel($model){
        $this -> model = $model;
    }
    public function getModel(){
        return $this -> model;
    }
}

class SportsCar extends Car{
}
    $sportsCar1 = new sportsCar();

    $sportsCar1 -> setModel("BMW");

    echo $sportsCar1 -> getModel();


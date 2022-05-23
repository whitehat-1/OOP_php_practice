<?php

//The__construct()magicmethod 
// We use __construct() in order to do something as soon as we create an object out of a class.
// In this case, we use it to set the default value of the $model property.

class Car{
    private $model;
    // Constructor method://pass the value of the variable $model to the __construct() method
    public function  __construct($model){
        $this -> model =$model;
    }
    public function getCarModel()
{
    return $this -> model;
 }
}
//pass the value of the variable after the object is created
$car1 = new Car("Mercedes");
echo $car1 -> getCarModel();

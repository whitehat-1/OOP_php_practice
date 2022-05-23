<?php
//magic constants are written in uppercase letters and prefixed and suffixed with two underlines
//in order to get the name of the class in which 

class Car{
    private $model='';
    public function __construct($model= null){
        if($model){
            $this-> model = $model;

        }
    }
    public function getCarModel()
    {
        //The __CLASS__ magic constant is used to get the class name 
        return "the. <b>" . __CLASS__. "</b> model is" .$this-> model;
    }
}

$car1 = new Car('Mercedes');
echo $car1 -> getCarModel();

//Other magic constants that may be of help are:
// __LINE__ to get the line number in which the constant is used. 
//__FILE__ to get the full path or the filename in which the constant is used.
// __METHOD__ to get the name of the method in which the constant is used
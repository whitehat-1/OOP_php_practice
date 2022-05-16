<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>oop</title>
</head>

<body>

<?php
/*HOW TO CREATE CLASSES AND OBJECTS: INTRO TO OOP
CLASS, OBJECT, METHOD AND PROPERTY*/

/* 1st step is to Declare the class*/
class Person {
//     /*these are the properties:*/
    public $age;
    public $firstName;
    public $lastName;

// /* A FUNCTION INSIDE A CLASS IS CALLED A METHOD:
// Method that says hello:*/
    public function hello(){
        return "My name is jerry";
    }
}

// // create an instance:
$p1 = new Person();


// //SET THE VALUES:
$p1 -> age = '28';
$p1 -> firstName ='jerry';
$p1 -> lastName ='Doe';

// //GET THE VALUES:
echo $p1 -> hello(); 
echo $p1 -> age;
echo $p1 -> firstName;
echo $p1 -> lastName;

// /*$THIS FUNCTION IN PHP:enables us to approach properties and methods from within the class*/
class Car{
    public $comp;
    public $color='red';
    public $hasSunRoof=true;

// /*THE METHOD CAN APPROACH THE CLASS PROPERTIES WITH $THIS KEYWORD*/
    public function hello(){
        return "i am a  "   .  $this->comp. 
        "and my color is "  .   $this->color;
    }  
}
$bmw=new Car();
$benz=new Car();

$bmw->comp='BMW';
$bmw->color='red';

echo $bmw->hello();





/* CHAINING METHODS AND PROPERTIES*/
class Car{
    public $tank;
    //add the gallon of fuel to the tank when you fill it
    public function fill($float){
        $this-> tank += $float;
        return $this;
    }
    //remove the gallons of fuel from the tank as we drive
    public function ride($float){
        $miles=$float;
        $gallons=$miles/50;
        $this->tank -= $gallons;
        return $this;
    }

}
//create an object from the Car class
$toyota = new Car();
//add 10 gallons of fuel and drive 40miles,then get the number of gallons remaining  
$tank = $toyota -> fill(10) -> ride(40) -> tank;

echo $tank;
/////////////////////////////////////////////
//exerise
class User{
    public $firstName;
    public function hello(){
        echo "hello, " . $this-> firstname;
        return $this;
    }

    public function register(){
        echo "regitered"; 
        return $this;
    }
    public function mail(){
        echo "email sent";
    // dose not need retun $this because it is the last on the chain
    }
}
$p1 = new User();
$p1-> firstName="jerry";

$p1-> hello() -> register() -> mail();



###Access Modifiers: Private and Public
// private: only accessible within the class
// public: accessible from anywhere

class Car {
    // Public methods and properties
    public $model;
    public function getModel()
    {
    return "The car model is " . $this -> model;
    }
    }
    $mercedes = new Car();
    // Here we access a property from outside the class
    $mercedes -> model = "Mercedes";
    // Here again we access another method from outside the class
    echo $mercedes -> getModel();
<?php
###Access Modifiers: Private and Public
// private: only accessible within the class
// public: accessible from anywhere

##Example1:
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

##Example2:
    // private: only accessible within the class
    class Car {
        // Private
        private $model;
        public function getModel()
        {
        return "The car model is " . $this -> model;
        }
        }
        $mercedes = new Car();

        // We try to access a private property from outside the class.
        $mercedes -> model = "Mercedes";
        echo $mercedes -> getModel();
// this result gives us an error!!!    

//correct example:
class Car {
    // The private access modifier denies access to the method // from outside the class’s scope 
    private $model;
    // The public access modifier allows the access to the method // from outside the class 
    public function setModel($model) { $this -> model = $model; }
    public function getModel() { return "The car model is " . $this -> model; }
    }
    $mercedes = new Car(); //instantiation of the class Car
    // Set the car’s model 
    $mercedes -> setModel("Mercedes");
    // Get the car’s model 
    echo $mercedes -> getModel();

    //Result: The car model is Mercedes

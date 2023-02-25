<?php
class Human{
    public $name;
    public $age;
    
    function sayHi(){
        $this->sayName();
    }
  
    function __construct($personName, $age=0)
    {
        $this->name = $personName;
        $this->age = $age;
    
    }


    function sayName(){

        if ($this->age) {
            echo "My name is {$this->name} and my age is {$this->age}\n";
        }else{
            echo "My name is {$this->name} and I don't know my age";
        }
        
        
       
    }
}

$h2 = new Human("Nurul Islam", 28);
$h3 = new Human("Sadman");
$h2->sayHi();
$h3->sayHi();
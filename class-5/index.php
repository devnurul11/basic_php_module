<?php

class Human{
    public $name;
    function sayHi(){
        echo "Hello world\n";
    }
}

class Cat{
    function sayHi(){
        echo"Meow world\n";
    }
}

class Dog{
    function sayHi(){
        echo"Vow \n";
    }
}

$h1 = new Human();
$h1->name = "Sadman \n";
$c2 = new Cat();
$d1 = new Dog();

$c2->sayHi();
$d1->sayHi();
echo $h1->name;

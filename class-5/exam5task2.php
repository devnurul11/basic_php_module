<?php

//Task 2: Basic OOP in PH
// Create a PHP class called "Person" with the following properties and methods:
// Properties:
// Name
// Email
// Methods:
// setName($name): sets the name property
// setEmail($email): sets the email property
// getName(): returns the name property
// getEmail(): returns the email property
// Create an instance of the Person class and set the name and email properties. Use the getName() and getEmail() methods to display the properties on the webpage.


class Person
{
    public  $name;
    public $email;

    public function __construct($name="", $email="")
    {
        $this->name = $name;
        $this->email = $email;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName($name)
    {
        $this->name = $name;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function displayIfor(){
        echo "Name =".$this->name ."<br>";
        echo "Email =" .$this->email ."<br>";
    }
}
// $person = new Person('Faruk', 'Ripon@gmail.com');
// $person->displayIfor();
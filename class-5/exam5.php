<?php
// Task 1: HTML Basics


// Create an HTML form that allows users to input their name and email address. The form should have two fields: one for name and one for email. Use appropriate HTML tags to structure the form.
?>

<form action="" method="post">
    <label for="name">Name</label>
    <input type="text" id="name" name="name" placeholder="Type your full name"> <br><br>
    <label for="email">Email</label>
    <input type="email" id="email" name="email" placeholder="Type your Email"> <br><br>
    <input type="submit" value="Sand">
</form>

<?php

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





// Task 3: Superglobal Variables in PHP

// Create a PHP script that retrieves the user's name and email from the HTML form in Task 1 using the $_POST superglobal variable. Create a new instance of the Person class and use the setName() and setEmail() methods to set the name and email properties based on the form data. Use the getName() and getEmail() methods to display the properties on the webpage.

// Check if the form has been submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  // Retrieve the name and email from the form data
  $name = $_POST['name'];
  $email = $_POST['email'];

  // Create a new instance of the Person class
  $person = new Person();

  // Set the name and email properties using the setName() and setEmail() methods
  $person->setName($name);
  $person->setEmail($email);

  // Display the name and email properties using the getName() and getEmail() methods
  echo '<p>Name: ' . $person->getName() . '</p>';
  echo '<p>Email: ' . $person->getEmail() . '</p>';
}


?>
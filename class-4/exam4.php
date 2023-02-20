<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

 $names = array('Nurul', 'Ayman', 'Sadman', 'Ariyan','Anguman', 'Khalek', 'babu', 'badsha');

function sortStringsByLength($array) {
    usort($array, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $array;
  }

print_r(sortStringsByLength($names));


// 2.Write a PHP function to concatenate two strings, but with the second string starting from the end of the first string.

$fistStr = "The name of my country ";
$secoundStr = "Bangladesh";

function twoStringConcate($str1, $str2) {
    echo $str1 .$str2;
};

twoStringConcate($fistStr, $secoundStr);

// 3.Write a PHP function to remove the first and last element from an array and return the remaining elements as a new array.

$names = array('Nurul', 'Ayman', 'Sadman', 'Ariyan','Anguman', 'Khalek', 'babu', 'badsha');


function newArryWithOutFirstAndLastElement($array){
     array_pop($array);
     array_shift($array);
     return $array;
}

print_r(newArryWithOutFirstAndLastElement($names));

// 4.Write a PHP function to check if a string contains only letters and whitespace.

$string ='Bangladesh is a special case Bangladesh Dhaka is the capital ofBangladesh';
   

function containsOnlyLettersAndWhitespace($str) {
    return preg_match('/^[a-zA-Z\s]+$/', $str);
  }
  
  if (containsOnlyLettersAndWhitespace($string)) {
        echo 'It is string that contains only letters and whitespace';
  }else{
        echo 'It is not the string  that contains only letters and whitespace';
  }


// 5.Write a PHP function to find the second largest number in an array of numbers.
    $numbers = array(5, 20, 60, 50, 30,100, 60, 90, 70);
//    
    function secoundHiestNumber($n){
        sort($n);
        $count = count($n);
        $count-=2;
        return $n[$count];
    }

    echo secoundHiestNumber($numbers);

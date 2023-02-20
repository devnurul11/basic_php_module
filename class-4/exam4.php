<?php

// 1.Write a PHP function to sort an array of strings by their length, in ascending order. (Hint: You can use the usort() function to define a custom sorting function.)

 $names = array('Nurul', 'Ayman', 'Sadman', 'Ariyan','Anguman', 'Khalek', 'babu', 'badsha');

function sortStringsByLength($array) {
    usort($array, function($a, $b) {
      return strlen($a) - strlen($b);
    });
    return $array;
  }

//print_r(sortStringsByLength($names));


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
    $arrayCount = count($array);
    $newArray =array('');
    foreach ($array as $key=> $value) {
        if ($key == 0 && $key == $arrayCount) {
            continue;
            array_push($newArray, $value);
            return $newArray;
        }
    }
};

//var_dump(newArryWithOutFirstAndLastElement($names));
// 4.Write a PHP function to check if a string contains only letters and whitespace.


// 5.Write a PHP function to find the second largest number in an array of numbers.





// function longestWord($string) {
      
//     $words = explode(' ', $string);
    
//     // Initialize variables for the longest word and its length
//     $longest_word = '';
//     $longest_length = 0;
    
//     // Loop through each word and compare its length to the current longest length
//     foreach ($words as $word) {
//       $length = strlen($word);
//       if ($length > $longest_length) {
//         $longest_word = $word;
//         $longest_length = $length;
//       }
//     }
    
//     // Return the longest word
//     return $longest_word;
//   }
// $str = "The quick brown fox jumped over the lazy dog mamamamama aghaigiauwhtgiougkjvn";
//  echo longestWord($str);
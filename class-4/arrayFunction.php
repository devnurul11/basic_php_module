<?php

// $numbers = array(1,2,3,4,5,6,7,8,9,10,11,12,13,14,15);

// function square($n){
//     printf("Square of %d is %d \n", $n, $n*$n);
// }

// array_walk($numbers, 'square');




// function cube($n){
//     return $n*$n*$n;
// }

// $newArray =array_map('cube', $numbers);

// print_r($numbers);
// print_r($newArray);



// function even($n){
//     return $n % 2 ==0;
// }
// function odd($n){
//     return $n % 2 ==1;
// }

// //$newArray = array_filter($numbers, 'even');
// $newArray = array_filter($numbers, 'odd');

// print_r($newArray);

$person = ['jamal', 'Nurul', 'Nuzmul', 'Samim', 'Nahid'];

// function filterByN($name){
//     return $name[0]=='N';
// };

// $newPerson = array_filter($person, 'filterByN');

// print_r($newPerson);

echo array_shift($person);

print_r(array_push($person, "mmam"));
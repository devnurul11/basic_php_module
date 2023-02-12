<?php

// $numbers = array(1, 2, 3, 4, 5);
// $i = 0;
// do {
//     echo $numbers[$i];
//     $i++;
// } while ($i < count($numbers));

// $numbers = array(1, 2, 3, 4, 5);
// $sum = 0;
// foreach ($numbers as $number){
//     if($number% 2== 0){
//         continue;
//     }
//     $sum+=$number;
// }
// echo $sum;

// function strFunc($str) {
//     if (strlen($str) == 0) {
//         return "";
//     } else {
//         return strFunc(substr($str, 1)) . substr($str, 0, 1);
//     }
// }
//         echo strFunc("hello");


$foo = function ($x) {
     return $x * 2;
};

$bar = function ($x) use ($foo) {
    return $foo($x) + 1;
};
echo $bar(5);
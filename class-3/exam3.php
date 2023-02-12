<?php

//1. Write a Reusable  PHP Function that can check Even & Odd Number And Return Decision
 
function checkEvenOrOdd(int $n){
    if ($n%2 == 0) {
       return "{$n} is an even number";
    }else{
        return"{$n} is an odd number";
    }
};

echo checkEvenOrOdd(130);


//2. 1+2+3...…….100  Write a loop to calculate the summation of the series
$sum = 0;
for ($i=0; $i <100; $i++) { 
   $sum+= $i;
}
echo $sum;
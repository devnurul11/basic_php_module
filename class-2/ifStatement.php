<?php

$n =12;

if (10 >= $n) {
    echo"It is  may be 12 or greater 10";
}elseif (12 == $n) {
    echo"It  is 12";
}
else{
    echo"it is not a valid number";
}

// leap year

if ( $year % 4 == 0 || ( $year % 100 == 0 && $year % 400 == 0)) {
    echo"\n $year is a leap year";
}else{
    echo"\n  This is not leap year";
}

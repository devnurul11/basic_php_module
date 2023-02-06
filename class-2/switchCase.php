<?php

$n ="b";

switch($n){
    case ($n >=10):
        echo"The Number is greater then or equal to 10";
        break;
    case ($n <=9):
        echo"The Number is greater then or equal to 9";
        break;
    default :
        echo"This is not a valid numbe ";
}

// leap year




$year =2022;

if ( $year % 4 == 0 || ( $year % 100 == 0 && $year % 400 == 0)) {
    echo"\n $year is a leap year";
}else{
    echo"\n  This is not leap year";
}

// Write a program to check student grades based on the marks.

// Conditions:

// If marks are 60% or more, the grade will be First Division.
// If marks are between 45% to 59%, the grade will be Second Division.
// If marks are between 33% to 44%, the grade will be Third Division.
// If marks are less than 33%, the student will  Fail.
echo"\n";

$marks =56;

if ( $marks >= 60){
    echo"The grade will be First Division";
}elseif( $marks >= 45 and $marks <=59){
    echo"The grade will be Second Division";
}elseif( $marks >= 33 and $marks <=44){
    echo"The grade will be 3rd Division";
}else{
    echo"The student will  Fail";
}

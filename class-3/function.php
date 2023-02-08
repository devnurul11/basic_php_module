<?php

function addNumber($n1, $n2) {
    $result = $n1+$n2;
    return $result;

}

echo addNumber(3, 58);

echo PHP_EOL;

function calculateAge($birthdate) {
    $birthdate = new DateTime($birthdate);
    $today = new DateTime();
    $age = $today->diff($birthdate);
    return $age->y ." Years ,". $age->m . "Months ,". $age->d. "days ." ;
}

$birthdate = "1994-11-25";
$age = calculateAge($birthdate);
echo "Age Is : ".$age;

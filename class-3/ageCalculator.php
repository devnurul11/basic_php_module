<?php

function calendarAge($birthDay) {
    $birthDay = new DateTime($birthDay);
    $today = new DateTime();

    $age = $today -> diff($birthDay);
    return $age->y;
}
$birthDay = "1994-11-25";
$age = calendarAge($birthDay);
echo "Age Is : ".$age;

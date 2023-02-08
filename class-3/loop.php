<?php

// for loop

for($i= 0; $i<=20; $i++){
        echo PHP_EOL;
        for ($j= 0; $j<$i ; $j++){
        echo"*";

    }
}
 
echo PHP_EOL;
// while loop

$i = 0;

while ($i < 10){
    $i++;
    echo"I love you".PHP_EOL;
}

echo PHP_EOL;
// do while loop
$i = 0;
do{
    $i++;
    echo "I love you".PHP_EOL;
} while($i<9);

// got to loop

$i =0;
a: $i++;
echo"$i\n";
if($i<10) goto a;

//foreach loop

$cities = array("Dhaka, Khulna, Rajshahi, Barishal, Chottogram, Rangpur");

foreach ( $cities as $key  => $city){
    echo $city;
}
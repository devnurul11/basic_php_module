<?php

//array_shift, array_unshift, array_pop, array_push

$new = ["Nurul", "Durul", "Selim", "Khalil"];

array_pop($new);
array_push($new, "Pollob");
array_shift($new);
array_unshift($new, 'Shila');

// echo($new_array);

//$push_array = array_push($new, "Sadman");

// $n =  count($new);

// for ($i=0; $i < $n; $i++) { 
//      echo $new[$i]."\n";
// }

print_r($new);
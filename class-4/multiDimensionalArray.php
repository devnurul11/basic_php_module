<?php

$foods = array(
    'vagitables' =>explode(', ' ,"Carrot, Poteto, Brocolly, benger"),
    'streetFood' =>explode(', ', 'barger, fusca, bread'),
    'restaurent' => explode(', ',"vat, dal, vuna")
);



array_pop($foods['vagitables']);

echo($foods['streetFood'][2]);
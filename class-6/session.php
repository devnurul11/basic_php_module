<?php
session_name('myapp');

session_start([
    'cookie_lifetime' =>60
]);
//$_SESSION['name'] = "ayman";

// $_SESSION['count'] = $_SESSION['count'] ?? 0; 

// $_SESSION['count'] ++;


// $_SESSION['name'] = 'Sadman';

echo $_SESSION['name'];




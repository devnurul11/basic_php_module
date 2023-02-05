<?php
$n =500;

if (50==$n) {
    echo"This is a 50";
} elseif($n==100) {
    echo"This is a 100";
}
else{
    echo"It is not a 50";
}
echo"\n";

$result = (50 == $n)?("This is a 50 "):(($n==100)?("This is 100"):("This is not a 50"));

echo $result;
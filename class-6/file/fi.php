<?php

$fileName ="/G:/laragon/www/basic_php_module/class-6/file/data/f1.txt";

$fp= fopen($fileName, "r");

$line = fgets($fp);

echo $line;

fclose($fp);
<?php
$i =1;
var_dump($i); //$i is integer
echo "<br>";
$i = 2.3;
var_dump($i); //$i is float
echo "<br>";
$i = "php type casting";
var_dump($i); //$i is string
echo "<br>";
$string_var = "string value for php type";
$int_var = (int)$string_var;
var_dump($int_var);
?>
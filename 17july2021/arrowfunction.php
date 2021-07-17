<?php

$z = 1;
$fn = fn($x) => fn($y) => $x * $y + $z;

var_export($fn(5)(10));
?>
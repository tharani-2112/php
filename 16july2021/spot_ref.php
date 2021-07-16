<?php
$a = 5;
$b = $a;
var_dump(is_ref($a, $b)); //false

$a = 5;
$b =& $a;
var_dump(is_ref($a, $b)); //true
echo "---\n";
?>
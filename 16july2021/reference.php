<?php
$var = "foo";
$ref =& $var;

unset($var);

echo $var; // >Notice:  Undefined variable: var
echo "$ref\n"; // >foo
?>
<?php
$a = 1;
$b =& $a;

$b = 2;
echo "$a,$b\n"; // 2,2

$a = 3;
echo "$a,$b\n"; // 3,3

$c =& $d;
$c = 4;
echo "$c,$d\n"; // 4,4
?>


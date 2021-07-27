<?php
$var1 = "foo";
$ref1 =& $var1;

$ref1 = NULL;

echo $var1; // Value is NULL, so nothing prints
echo $ref1; // Value is NULL, so nothing prints
?>
<?php
function foo(&$var) { }

foo($a); // $a is "created" and assigned to null

$b = array();
foo($b['b']);
var_dump(array_key_exists('b', $b)); // bool(true)

$c = new StdClass;
foo($c->d);
var_dump(property_exists($c, 'd')); // bool(true)
?>
<?php
    $a = 0;
    $b = &$a;
    echo "$a\n"; //0
    unset($b); // unset $b
    echo "$a\n"; //0 it's OK
?>

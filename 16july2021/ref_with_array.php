<?php

$a = 1;
$b = 2;
$c = array(&$a, &$b);

$a = 3;
$b = 4;
echo "c: $c[0],$c[1]\n"; // 3,4

$c[0] = 5;
$c[1] = 6;
echo "a,b: $a,$b\n"; // 5,6

$d = array(1,2);
$e =& $d;

$d[0] = 3;
$d[1] = 4;
echo "e: $e[0],$e[1]\n"; // 3,4

$e[0] = 5;
$e[1] = 6;
echo "d: $d[0],$d[1]\n"; // 5,6

$e = 7;
echo "d: $d\n"; 


$a = 1;
$b = 2;
$f = array(&$a,&$b);

foreach($f as $x) 
  $x = 3;
echo "a,b: $a,$b\n"; // 1,2

foreach($f as &$x)
$x = 3;
echo "a,b: $a,$b\n"; // 3,3

$x = 4;
echo "a,b: $a,$b\n"; // 3,4 

unset($x);
$x = 5;
echo "a,b: $a,$b\n"; // 3,4 
?>
<?php
$a = 1;
$b = array(2, 3);
$arr = array(&$a, &$b[0], &$b[1]);
$arr[0]++; $arr[1]++; $arr[2]++;
/* $a == 2, $b == array(3, 4); */
echo "$arr[0],$arr[1],$arr[2]\n";
?>
<?php

$arr = array(1, 'test');

$point_to_test =& $arr[1];

$new_ref = 'new';

$arr[1] =& $new_ref;

echo $arr[1]; // echo 'new';
echo $point_to_test; // echo 'test'

?>
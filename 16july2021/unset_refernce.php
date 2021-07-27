<?php
$a = 1;
$b =& $a;
unset($a); 
echo $a;
?>
<?php
//if you do:

$a = "hihaha";
$b = &$a;
$c = "eita";
$b = $c;
echo "$a\n"; // shows "eita"

$a = "hihaha";
$b = &$a;
$c = "eita";
$b = &$c;
echo "$a\n"; // shows "hihaha"

$a = "hihaha";
$b = &$a;
$b = null;
echo "$a\n"; // shows nothing (both are set to null)

$a = "hihaha";
$b = &$a;
unset($b);
echo "$a\n"; // shows "hihaha"

$a = "hihaha";
$b = &$a;
$c = "eita";
$a = $c;
echo "$b\n"; // shows "eita"

$a = "hihaha";
$b = &$a;
$c = "eita";
$a = &$c;
echo "\n$b"; // shows "hihaha"

$a = "hihaha";
$b = &$a;
$a = null;
echo "\n$b"; // shows nothing (both are set to null)

$a = "hihaha";
$b = &$a;
unset($a);
echo "\n$b"; // shows "hihaha"
?>
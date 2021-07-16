<?php
function foo(&$var)
{
    $var++;
    echo $var;
}

$a=5;
foo($a);
?>
<?php
$a1 = "One";
$a2 = "Two";
$b1 = "Three";
$b2 = "Four";

$b1 =& $a1;
$a2 =& $b2;

echo $a1; //Echoes "One"
echo $b1; //Echoes "One"

echo $a2; //Echoes "Four"
echo $b2; //Echoes "Four"
?>
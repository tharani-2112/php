<?php
$a = 2;

echo ($a == 1 ? 'one' :
        ($a == 2 ? 'two' :
        ($a == 3 ? 'three' :
        ($a == 4 ? 'four' : 'other') ) ) );
echo "\n";

?>
<?php
$this_ = true;
$that = false;
$truth = $this_ and $that;
echo $truth;
$truth = $this_ && $that;
echo $truth;
?>

<?php

$b = 5;
$a = ( ( ++$b ) > 5 ); // 
echo (int)$a;
echo "\n";

$b = 5;
$a = ( ( $b++ ) > 5 ); 
echo (int)$a; 
echo "\n";

?>

<?php
$c=&$a;
$a = ($b = 4) + 5; // $a is equal to 9 now, and $b has been set to 4.
echo $a;
echo "\n";
echo $c;
echo "\n";

?>

<?php

$b = "Hello ";
$b .= "There!"; 
echo $b;
echo "\n";

?>

<?php
$output = `ls -al`;    //execution operator
echo "<pre>$output</pre>";
?>

<?php
class MyClass
{
}

class NotMyClass
{
}
$a = new MyClass;

var_dump($a instanceof MyClass);
var_dump($a instanceof NotMyClass);
?>
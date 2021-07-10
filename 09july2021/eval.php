<?php
$string = 'cup';
$name = 'coffee';
$str = 'This is a $string with my $name in it.';
echo $str. "<br />";
eval("\$stri = \"$str\";");
echo $stri. "<br />";
?>
<?php

echo eval( '$var = (20 - 5);' );  

echo ' someString ' . eval( 'echo $var = 15 ;' );

echo ' someString ' . eval( 'echo $var = 15;' ) . ' otherString ';

echo ' someString ' . eval( 'echo $var = 15;' ) . ' otherString ' . '...' .eval( 'echo " __ " . $var = 10;' ); 
?>
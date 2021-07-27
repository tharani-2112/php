<?php
function myName1($b,...$a){
print_r($a);//Array ( [0] => Bar [1] => Baz )
echo "<br>";
echo $b;//Foo
}

$x = "Foo";
$y = "Bar";
$z = "Baz";
myName1($x,$y,$z);
echo "<br>";

function myName2($b="John",...$a){
print_r($a);//Array ( [0] => Bar [1] => Baz )
echo "<br>";
echo $b;//Foo
}

$x = "Foo";
$y = "Bar";
$z = "Baz";
myName2($x,$y,$z);
echo "<br>";

?>
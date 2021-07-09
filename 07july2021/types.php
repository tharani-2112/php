<?php
$a_bool = TRUE;   // a boolean
$a_str  = "foo";  // a string
$a_str2 = 'foo';  // a string
$an_int = 12;     // an integer?>

<p> <?= gettype($a_bool); ?></p>
<p ><?= gettype($a_str); ?></p>
<?php 
if (is_int($an_int)) {
    $an_int += 4;
}?> 
 <h1><?=  $an_int; ?> </h1>
<?php
if (is_string($a_bool)) {
    echo "String: $a_bool";
}
else{
    echo "Not a string";
}

?>
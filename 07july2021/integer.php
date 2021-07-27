<?php
$large_number = 2147483647;
var_dump($large_number);                     

$large_number = 21.47483648;
var_dump($large_number);                     

$million = 1000000;
$large_number =  50000000000000*$million;
var_dump($large_number);     

$a=25;
var_dump($a/7);

var_dump((int)($a/7));

var_dump(round($a/7));
?>
<?php
for( $tmp = 0, $i = 0; $i < 100; $i++ ) {
    $tmp += 100000;
    echo ($tmp),"\n";
}
?>
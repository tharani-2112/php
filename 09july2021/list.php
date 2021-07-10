<?php

$info = array('coffee', 'brown', 'caffeine');

list($drink, $color, $power) = $info;
echo "$drink is $color and $power makes it special.\n";

list($drink, , $power) = $info;
echo "$drink has $power.\n";

list( , , $power) = $info;
echo "I need $power!\n";

// list() doesn't work with strings
list($bar) = "abcde";
var_dump($bar); // NULL
?>

<?php
$data = [
    ["id" => 1, "name" => 'Tom'],
    ["id" => 2, "name" => 'Fred'],
];
foreach ($data as ["id" => $id, "name" => $name]) {
    echo "id: $id, name: $name\n";
}
echo PHP_EOL;
list(1 => $second, 3 => $fourth) = [1, 2, 3, 4];
echo "$second, $fourth\n"; ?>

<?php
$array = ['locality' => 'Namakkal', 'postal_code' => '1110'];

list('postal_code' => $zipCode, 'locality' => $locality) = $array;

print $zipCode ; // will output 1110
print $locality ; // will output Tunis
?>
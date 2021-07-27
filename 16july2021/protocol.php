<?php

$hello = fopen('php://memory', 'r+'); // $hello, $php, $world are all different streams.
$php   = fopen('php://memory', 'r+');
$world = fopen('php://memory', 'r+'); // They're not the same stream opened three times.

fputs($hello, "Hello ");
fputs($php, "PHP ");
rewind($php);
fputs($world, "World!");
rewind($hello);
rewind($world);

echo '[', stream_get_contents($hello), '][', stream_get_contents($php), '][', stream_get_contents($world), ']';
// If they were the same stream the output would be "[World!][World!][World!]".
?>
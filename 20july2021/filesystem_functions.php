<?php
$path = "/testweb/home.php";
echo basename($path) ."<br/>";
echo basename($path,".php");
echo "<br>";

echo filesize("test.txt");
echo "<br />";

$file = fopen("test.txt", "a+");
// truncate file
ftruncate($file,100);
fclose($file);

//Clear cache and check filesize again
clearstatcache();
echo filesize("test.txt");
echo "<br />";
?>
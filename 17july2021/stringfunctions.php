<!DOCTYPE html>
<html>
<body>

<?php
echo strlen("Hello world!");
echo "<br>";
echo str_word_count("Hello world!");
echo "<br>";
echo strrev("Hello world!");
echo "<br>";
echo strpos("Hello world!", "world");
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!");
echo "<br>";
echo addcslashes('foo[ ]', 'A..z');
echo "<br>";
echo chop("   Ramki   ");
?> 
 
</body>
</html>
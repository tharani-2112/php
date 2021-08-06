<!DOCTYPE html>
<html>
<body>

<?php
$data = serialize(array("Red", "Green", "Blue"));
echo $data;
echo "<br>";

$test = unserialize($data);
var_dump($test);
?>

</body>
</html>

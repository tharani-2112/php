<!DOCTYPE html>
<html>
<body>

<?php
//array_walk
function myfunction($value,$key,$p)
{
echo "$key $p $value<br>";
}
function myfunction1(&$value,$key)
{
$value="yellow";
}
$a=array("a"=>"red","b"=>"green","c"=>"blue");
array_walk($a,"myfunction","has the value");
array_walk($a,"myfunction1");
print_r($a);
echo "<br>";

//array_map
function myfunction2($v1,$v2)
{
if ($v1===$v2)
  {
  return "same";
  }
return "different";
}

$a1=array("Horse","Dog","Cat");
$a2=array("Cow","Dog","Rat");
print_r(array_map("myfunction2",$a1,$a2));
echo "<br>";

//array_filter
function odd($var)
{
    // returns whether the input integer is odd
    return $var & 1;
}
function even($var)
{
    // returns whether the input integer is even
    return !($var & 1);
}

$array1 = ['a' => 1, 'b' => 2, 'c' => 3, 'd' => 4, 'e' => 5];
$array2 = [6, 7, 8, 9, 10, 11, 12];

echo "Odd :\n";
print_r(array_filter($array1, "odd"));
echo "<br>";
echo "Even:\n";
print_r(array_filter($array2, "even"));
echo "<br>";

//array_reduce
function myfunction3($v1,$v2)
{
return $v1+$v2;
}
$a=array(10,15,20);
print_r(array_reduce($a,"myfunction3",5));
echo "<br>";
?>

</body>
</html>

<!DOCTYPE html>
<html>

<body>

    <?php
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");
print_r(array_change_key_case($age,CASE_UPPER));
echo "<br>";
$cars=array("Volvo","BMW","Toyota","Honda","Mercedes","Opel");
print_r(array_chunk($cars,2));
echo "<br>";
$fname1=array("Peter","Ben","Joe");
$age1=array("35","37","43");
$c=array_combine($fname1,$age1);
print_r($c);
echo "<br>";
print_r(array_count_values($cars));
echo "<br>";
$a1=array_fill(3,4,"blue");
$b1=array_fill(0,1,"red");
print_r($a1);
echo "<br>";
print_r($b1);
echo "<br>";
$a1=array("a"=>"red","b"=>"green","c"=>"blue","d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$result=array_diff($a1,$a2);
print_r($result);
echo "<br>";
$a=array("Volvo"=>"XC90","BMW"=>"X5");
if (array_key_exists("Volvo",$a))
  {
  echo "Key exists!";
  }
else
  {
  echo "Key does not exist!";
  }
  echo "<br>";
print_r(array_keys($a1));
echo  "<br>";
?>

</body>

</html>
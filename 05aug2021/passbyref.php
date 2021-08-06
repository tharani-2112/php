<?php
function add_five(&$value) {
  $value += 5;
}

$num = 2;
add_five($num);
echo $num;
echo "<br>";
?>

<?php  
function adder(&$str2)  
{  
    $str2 .= 'Call By Reference';  
}  
$str = 'This is ';  
adder($str);  
echo $str;  
?>  
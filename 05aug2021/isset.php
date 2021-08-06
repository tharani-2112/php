<?php

$a = 0;
if (isset($a)) {
  echo "Variable 'a' is set.\n";
}
 else{
     echo "empty";
 }
echo "<br>";

$b="";
   if(!isset($b)){
       echo "true";
   }
   else{
       echo "false";
   }
   echo "<br>";


$c = null;
if (isset($c)) {
  echo "Variable 'b' is set.";
}
else{
    echo "not set";
}
echo "<br>";


$temp_val = 0;
   if (empty($temp_val)) {
      echo $temp_val . ' is considered empty';
   }
   else{
       echo "empty";
   }
   echo "<br>";


$x="";
   if(empty($x)){
       echo "true";
   }
   else{
       echo "false";
   }

?>
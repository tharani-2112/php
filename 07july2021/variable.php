<?php
$foo = 'Bob';              
$bar = &$foo;              
$bar = "My name is $bar";  
echo $bar;
echo $foo;                 

$name="aa'1'";
if(!preg_match('/^[a-zA-Z][_]?[\x7f-\xff][a-zA-Z0-9_\x7f-\xff]*/', $name))
   echo $name.' is not a valid PHP variable name';
else
    echo $name.' is valid PHP variable name';

    
  
  
//preg_match method checks whether the given string matches to the pattern
?>
<?php
function double($i)
{
    return $i*2;
}
$b = $a = 5;        
$c = ++$a;  
echo $c."\n";
$e = $d = ++$b;    
echo $e."\n";


$f = double($d++);  
echo $f."\n";
$g = double(++$e);  
echo $g."\n";
$h = $g += 10;      
echo $h."\n";
?>
<?php

for ($a = 2, $b = 4; $a < 3; $a++)
{
  echo $a."\n";
  echo $b."\n";
}

?>
<?php
function a() {echo 'a';}
function b() {echo 'b';}
a() == b(); 

$a = 3;
var_dump( $a == $a = 4 ); 
?>
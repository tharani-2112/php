<?php
$a = 0;
function &b()
{
    global $a;
    return $a;
}
$c = &b();
$c++;
echo
"
\$a: $a
\$b: $c
"
?>
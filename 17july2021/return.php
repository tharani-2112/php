<?php
function square($num)
{
    return $num * $num;
}
echo square(4);   // outputs '16'.
?>
<?php

class A {
    public function f ($a)
    {
        return 1;
    }
}

class B extends A {
    public function f ($a): int // + return type, OK
    {
        return 1;
    }
}

class C extends A {
    public function f (int $a) // + argument type, WARNING
    {
        return 1;
    }
}
?>
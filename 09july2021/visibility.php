<?php
class MyClass
{
    // Declare a public constant
    public const MY_PUBLIC = 'public';

    // Declare a protected constant
    protected const MY_PROTECTED = 'protected';

    // Declare a private constant
    private const MY_PRIVATE = 'private';

    public function foo()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE;
    }
}

$myclass = new MyClass();
MyClass::MY_PUBLIC; 
MyClass::MY_PROTECTED;
MyClass::MY_PRIVATE; 
$myclass->foo(); 

class MyClass2 extends MyClass
{
    
    function foo2()
    {
        echo self::MY_PUBLIC;
        echo self::MY_PROTECTED;
        echo self::MY_PRIVATE; 
    }
}

$myclass2 = new MyClass2;
echo MyClass2::MY_PUBLIC; 
$myclass2->foo2(); 
?>

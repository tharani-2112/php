<?php
class Test
{
    static public function getNew()
    {
        return new static;
    }
}

class Child extends Test
{}

$obj1 = new Test();
$obj2 = new $obj1;
var_dump($obj1 !== $obj2);

$obj3 = Test::getNew();
var_dump($obj3 instanceof Test);

$obj4 = Child::getNew();
var_dump($obj4 instanceof Child);
?>
<?php
print Does\Not\Exist::class; ?>

<?php

class Mobile {

public $deviceName,$deviceVersion,$deviceColor;

public function __construct ($name,$version,$color) {
    $this->deviceName = $name;
    $this->deviceVersion = $version;
    $this->deviceColor = $color;
    echo "The ".__CLASS__." class is stratup.<br /><br />";
}
 
public function printOut () {
    echo 'I have a '.$this->deviceName
        .' version '.$this->deviceVersion
        .' my device color is : '.$this->deviceColor;
}
public function __destruct () {
    $this->deviceName = 'Removed';
    echo '<br /><br />Dumpping Mobile::deviceName to make sure its removed, Olay :';
    var_dump($this->deviceName);
    echo "<br />The ".__CLASS__." class is shutdown.";
}

}

$mob = new Mobile('iPhone','5','Black');

$mob->printOut();

?>
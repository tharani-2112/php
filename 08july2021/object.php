<?php
class foo
{
    function do_foo()
    {
        echo "Doing foo."; 
    }
}

$bar = new foo; //instantiating stdclass object
$bar->do_foo();
?>

<?php
$obj = (object) array('1' => 'foo');//cast empty array to object
var_dump(isset($obj->{'1'})); // outputs 'bool(true)' as of PHP 7.2.0; 'bool(false)' previously
var_dump(key($obj)); // outputs 'string(1) "1"' as of PHP 7.2.0; 'int(1)' previously
?>

<?php
$x = (object) array('a'=>'A', 'b'=>'B', 'C');
echo '<pre>'.print_r($x, true).'</pre>';
?>

<?php
  class myNumber
  {
    public $value;
  }

  $arrayOfMyNumbers = array();
  $arrayItem = new myNumber();
  for( $i = 0; $i<3; $i++ ) {
    $arrayItem->value = $i;
    $arrayOfMyNumbers[] = $arrayItem;
  }

  var_dump($arrayOfMyNumbers);
?>

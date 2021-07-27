<!DOCTYPE html>
<html>
<body>

<?php
class Fruit {
  
  public $name;
  public $color;
  public $number;

  function __construct($name,$color,$number){
    $this->name = $name;
    $this->color = $color;
    $this->num=$number;
  }
  function get_name() {
    return $this->name;
  }
  function get_color() {
    return $this->color;
  }
  function get_num() {
    return $this->num;
  }
}

$apple = new Fruit('Apple','Red','10');
$orange = new Fruit('Orange','Orange clr','20');
echo "Name: " . $apple->get_name();
echo "<br>";
echo "Color: " .  $apple->get_color();
echo "<br>";
echo "Number:" . $apple->get_num();
echo "<br>";
echo "Name: " . $orange->get_name();
echo "<br>";
echo "Color: " .  $orange->get_color();
echo "<br>";
echo "Number:" . $orange->get_num();
echo "<br>";
var_dump($apple instanceof Fruit);
echo "<br>";


class Strawberry extends Fruit {
    public function message() {
      echo "Am I a fruit or a berry? ";
      echo "<br>";
    }
  }
  $strawberry = new Strawberry("Strawberry", "red",'5');
  $strawberry->message();
  echo "Name: " . $strawberry->get_name();
echo "<br>";
echo "Color: " .  $strawberry->get_color();
echo "<br>";
echo "Number:" . $strawberry->get_num();
echo "<br>";
?>
 
</body>
</html>

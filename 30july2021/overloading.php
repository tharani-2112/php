<?php
class shape {
	
	function __call($name_of_function, $arguments) {
			
		if($name_of_function == 'area') {
			
			switch (count($arguments)) {
				
				case 1:
					return 3.14 * $arguments[0];
						
				case 2:
					return $arguments[0]*$arguments[1];
			}
		}
	}
}
	
$s = new Shape;
	
// Functio call
echo($s->area(2));
echo "<br>";
	
// calling area method for rectangle
echo ($s->area(4, 2));
?>

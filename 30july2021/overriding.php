<?php
class P {
	function relation() {
		echo "Parent";
	}
}
class C extends P {
	

	function relation() {
		echo "<br> Child";
	}
}

$p = new P;

$c= new C;

$p->relation();

$c->relation();
?>

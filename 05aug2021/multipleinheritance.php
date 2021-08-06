<?php

class A {
public function insideA() {
	echo "I am in class A";
    echo "<br>";
	}
}

interface B {
public function insideB();
}

class Multiple extends A implements B {

	function insideB() {
		echo "\nI am in interface";
        echo "<br>";
	}

	public function insidemultiple() {
	echo "\nI am in inherited class";
    echo "<br>";
	}
}

$obj = new multiple();
$obj->insideA();
$obj->insideB();
$obj->insidemultiple();


//Traits

trait trait1 {
public function sayhello() {
	echo "Hello";
}
}

trait trait2 {
public function sayfor() {
	echo "<br>Haii";
}
}

class Sample {
use trait1;
use trait2;
public function sample1() {
	echo "<br>welcome";
}
}

$test = new Sample();
$test->sayhello();
$test->sayfor();
$test->sample1();
?>


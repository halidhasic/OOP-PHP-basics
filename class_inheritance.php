<?php 
class Car{
	var $wheel_count = 4;
	var $door_count = 4;

	function car_details(){
		echo "Hello world";
	}
}
// make an instance of a class
$bmw-> new Car();

// defining another class
// and for inheritance we use following functionality, we need to use keyword EXTENDS, and we need the name of the class
// from which we are getting the properties and methods
class Trucks extends Car{
	// var $wheel_count = 4;
	// if we define the same variable in this class and give it some other value, it will override the previous var definition
}
// make an instance of a class
$man-> new Trucks();
echo $man->wheel_count;
?>
<?php 
// we build a method that is able to set values, and method which is able to get the values
// and this values are usually pulled form the private properties in the class
// and this is quite important

class Car{
	// they are all available inside the class
	private $wheel_count = 4;
	private $door_count = 4;
	private $seat_count = 4;

	// setter method, we are setting new values
	// since private property can be accessed only inside the class, we use setter method and define the property
	function set_values(){
		$this->wheel_count = 5;
		$this->door_count = 5;
		$this->seat_count = 5;
	}
	// getter method, we are getting new values
	// and getter method will help us to retreive private property values
	function get_values(){
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
	}

	
	// function car_details(){
	// 	echo $this->wheel_count;
	// 	echo $this->door_count;
	// 	echo $this->seat_count;
	// }
}
// make an instance of a class
$bmw-> new Car();
// we need to call setter method before the getter method, setter method sets the values
$bmw->set_values();
// here we call getter method, and getter method will display those values
$bmw->get_values();

?>
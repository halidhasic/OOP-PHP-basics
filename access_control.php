<?php 
// keywords we use to ocntroll he flow of our programs
// public, private, protected

class Car{
	// they are all available inside the class
	public $wheel_count = 4;
	// public means that this variable can bu used through this whole program, anywhere in the script
	private $door_count = 4;
	// private means that the variable is available only to this class
	protected $seat_count = 2;
	// protected means that it is only available inside the class, and inside any subclasses, like in inheritance

	function car_details(){
		// echo "Hello world";
		// return "This car has " . $this->wheel_count . " wheels";
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
	}
}
// make an instance of a class
$bmw-> new Car();
echo $bmw->wheel_count;
echo $bmw->door_count;
echo $bmw->seat_count;

// this way we can still see the values of the variables
echo $bmw->car_details();

?>
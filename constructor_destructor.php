<?php 

class Car{
	// they are all available inside the class
	public $wheel_count = 4;
	// public means that this variable can bu used through this whole program, anywhere in the script
	private $door_count = 4;
	// private means that the variable is available only to this class
	static $door_count = 4;
	
	protected $seat_count = 2;
	// protected means that it is only available inside the class, and inside any subclasses, like in inheritance

	// creating constructors, these methods will initialize what is defined inside of them
	// every time we instantiate a class, constructor method gets called automatically
	// we do not need to call it using clas instances
	// in the constructor method we can call static properties without the constructor needed to be statis as well
	function __construct(){
		// echo "Hello world";
		// return "This car has " . $this->wheel_count . " wheels";
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
		echo self::$door_count; //calling static property
	}

	// destructor method is the opposite of the constructor, and it is not used that much
	// these methods will uninitialize some values

	function __destruct(){
		// echo "Hello world";
		// return "This car has " . $this->wheel_count . " wheels";
		echo $this->wheel_count;
		echo $this->door_count;
		echo $this->seat_count;
		echo self::$door_count; //calling static property
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
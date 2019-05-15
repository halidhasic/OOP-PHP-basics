<?php 
// static functionality can be assigned to a property or to a method
// difference is that regular properties attach to the instance, you always need to use instance in order to use that property
// for the static modifier property you do not need an instance, you refer to it by the class name
// it is assigned to a class instead being assigned to an instance

class Car{
	// they are all available inside the class
	static $wheel_count = 4;
	// public means that this variable can bu used through this whole program, anywhere in the script
	static $door_count = 4;
	
	static function car_details(){
		// if the method is static then instead of THIS we use classname:: to assign the values, and we need to add $before the variable
		// and also we need to define properties as static in order to use them this way
		// echo Car::$wheel_count; we reference the static property this way
		// but we can also reference it using the SELF keyword
		return self::$wheel_count;
 		return self::$door_count;
	}
}

class Trucks extends Car {
	static function display(){
		// echoing a method from the Car class, we use a PARENT keyword, we can also use the class name
		echo parent::car_details();
	} 
}


// make an instance of a class
// $bmw-> new Car();
 
 // calling the static method
 // echo Car::car_details();
 
 // echo Car::$wheel_count;
 // echo Car::$door_count;
// invoking a method form the Truck class, which has values from the Car class
Trucks::display();

?>
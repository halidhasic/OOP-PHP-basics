<?php 

class Cars {
	// how to define a property or a variable inside of a class
	// we use a keyword var, meaning variable

	var $wheel_count = 4;
	var $door_count = 4;

	function car_detail(){
		echo "Hello World";
		// the way we reference this class inside of a method, we use keyword THIS
		return "This car has " . $this->wheel_count . "wheels";
	}
}

// the way we actually access the properties of the class, variables

$bmw = new Cars();
echo $bmw->wheel_count;
// changing the value
echo $bmw->wheel_count = 10;

echo $bmw->car_detail();
?>
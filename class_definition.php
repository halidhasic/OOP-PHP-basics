<?php 
// defining a class etc.
class Cars {
	// here we write class definition
	// properties, variables, methods, functions
	// inisde a class function are called methods
	// properties are usually variables
	// so here we put a blueprint, or a definition of the object that we want to create

	// defining methods in the class
	// same as functions, method it is just a function defined in the class
	// when it is by itself, outside of the class then we call it a function
	function greeting(){
		echo "Hello World";
	}

}
// this function is going to put all the classes that php is declaring automatically in this variable
// to see the classes we need to use a loop
// $my_classes = get_declared_classes();

// php also keeps the track of defined methods
// if we have more classes, or in this case methods, then thos variable becomes like an array
// and we need or can to loop through it

/*$the_methods = get_class_methods('Cars');

foreach ($the_methods as $method) {
	echo $method . "<br>";
}*/
?>
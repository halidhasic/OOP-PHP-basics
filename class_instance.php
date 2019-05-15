<?php 

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
// instances are objects of the class
// defining one instance of a class
// new Cars();
// in order to do it multiple times we nned to assign the instance to something
// and that would be a variable, array or similar
	$bmw = new Cars();
	$mercedes = new Cars();
// the way we use the methods of the class
	$bmw -> greeting();
?>
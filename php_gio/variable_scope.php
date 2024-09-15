<?php 
	
	// Variable Scopes 

	/**
	 * Variable scopes is the boundary
	 * where the variable can be accessed
	 * Local and Global scope
	 *
	 * */

	// Global scope variable
	$x = 10;
	
	echo "Before using global in foo() " . $x . "\n"; // Here $x = 10

	// Local scope variables inside the function
	function foo() {
		$y = 8;
		echo $y; // Here $y = 8

		// Get the global variable $x and add 2
		global $x;
		$x += 2;
		echo "\n" . $x . "\n"; // Here $x = 12
		
		// Using $GLOBALS super global variable (Array)
		// Should not use $GLOBALS like this.
		$GLOBALS['x'] = 20;
		echo "X is now " . $GLOBALS['x'] . "\n"; // Here $x = 20
	}

	foo();

	// it is 20 'cause refrence to original variable so it changed.
	echo "X's value after calling foo() " . $x . "\n";






	// Stacic variable
	/*
		Static variable is regular variable
		with local scope.
		Static variables don't get destroyed outside
		scope boundary.
	*/

	echo "\n\n\nStatic Variable\n\n\n";

	function getValue() {
		static $value = null; // Static keyword (Variable) to cache necessary.

		if($value == null) {
			$value =  someVeryExpensiveFunction();
		}

		// Some processing with $value

		return $value;
	}

	function someVeryExpensiveFunction() {
		sleep(2);

		echo "Processing.";
		return 10;
	}

	echo getValue() . "\n";
	echo getValue() . "\n";
	echo getValue() . "\n";

 ?>
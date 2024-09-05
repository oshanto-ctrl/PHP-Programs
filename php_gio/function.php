<?php 
	
	/* Function */

	function fooBar(/*Parameters*/) {
		echo "Hello World\n";
		return "No World Returned.\n";
	}	

	// Invoke it
	fooBar();
	// $msg = foo();
	// echo $msg;
	// echo foo();

	/** 
	 * Inner function 
	 * 
	 * We have to invoke foo() first to get to bar().
	 * We can not redeclare the same function name as shown.
	 * foo() outside bar() and foo() inside bar will get an error
	 * upon invoking them like foo(); bar(); // error happens here.
	 * **/

	function foo() {
		echo "Foo";

		function bar() {
			echo "Bar";

			/*
				 function foo() {
					echo "Foo2";
				} 
			*/
		}
	}


	/** 
	
	 * Return Type and Strict Type
	
	**/


	// Type hint the return value
	/* 
		It doesn't affect the output showing.
		that int after functionName(): is the return type.
		It's a loose type.
		'1' return will still convert to integer.
	*/
	// declare(strict_types=1); // Understand this first. 
	function returnInt(): int {
		
		return 1; 
	}

	echo "\n\n";
	var_dump(returnInt());

	/* 

		# Typehint multiple types in one function 
		
		? mark before typing in function return type.
		function f(): ?int {
	
		} This function will expect int and NULL (If null occured)

		Using mixed typehint where we can expect any
		return types. Do not need to use ? before mixed.
		It's NULL type included.

		We can use function f(): mixed {
			
		}
	*/
 	
	function fooRe(): int|float {
		return 1.5;
	}


	echo "\n\n";
	var_dump(fooRe());



 ?>
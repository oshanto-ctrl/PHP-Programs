<?php 
	
	// Function types 
	// Variable, Anonymous, Callable, Closure & Arrow

	/*
	 # Variable Function
	   
	   Make sure to check the functionName is called in variable inside
	   of a '' mark.
	 
	 */
	function sum(int|float ...$numbers): int|float {
		return array_sum($numbers);
	}

	$sumofnums = 'sum';
	// echo $sumofnums(1, 2, 3, 4) . "\n";
	
	// is_callable() function checks whether the content of a variable
	// can be called as a function or not. https://www.w3schools.com/php/func_var_is_callable.asp
	if(is_callable($sumofnums)) {
		// echo "Sum " . $sumofnums(1, 2, 3.5, 2.5) . "\n";
	} else {
		// echo "\nNot Callable.\n";
	}

	/*
	 #  Anonymous function
		(also known as lambda function)
		doesn't have name and ends with semicolon. (;)

		In anonymous function we can access the variable in 
		parent scope by using keyword 'use' and passing the
		variable I want to access. This is called closure.
		
		It just copies the variable to use inside local scope.
		Changing it in local scope will not change it in parent
		scope.
	*/

	$myConst = 1;
	$x = 2;
	$divByTwo = function (int $num) use($myConst, $x): int {
		// $myConst += 2;
		// echo "X = " . $x . "\n";
		// echo "My const local scope " . $myConst . "\n"; // 3
		return ($num + $myConst) % 2;
	};

	// Call the anonymous function
	// echo "Anonymous function: 50 divide by 2 = " . $divByTwo(50) . "\n";

	// echo "myConst Global scope " . $myConst . "\n"; // 1;



	/*
		# Callbackfunction:

		When a function is passed to another function 
		as an argument and then is called withing that
		function that is callback function. 
	*/

		$arr = [1, 2, 3, 4];

		$brr = array_map(function($element) {
			return $element * 2;
		}, $arr);

		print_r($arr); echo "\n"; print_r($brr); echo "\n";



		// Another anonymous and callback function example

		// This is a callback function applies the multiply function
		// to the result of array_sum()
		$s = function(callable $callback, int ...$numbers): int {
			return $callback(array_sum($numbers));
		};

		// Function multiply multiplies the elements by 2
		function multiply($element) {
			return $element * 2;
		}

		// Invoking the anonymous function $s with 
		// the first argument a function multiply as string. 
		echo "Callback Function result: " . $s('multiply', 1, 2, 3, 4);



		/*
			# Arrow function (Version > PHP7.4)
			
			Can access the variables from parent scope without
			using the keyword 'use'.
			It does not changes the value of the parent scope.

			Single line expression. Multiple lines can happen like array
			but can't have multi line expression.
			
		*/

		$y = 2; // Gloabl/Parent Scope variable.
		$crr = array_map(fn($number) => $number * $number, $arr);

		/*
			// Multiline expression. Array of array
		$crr = array_map(fn($number) => [
			$number * $number * ++$y,
			$number * $number * --$y,

		], $arr); 

		*/

		echo "\n\nArrow function: \n";
		print_r($crr);


 ?>
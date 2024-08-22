<?php 

	
	/* OPERATORS */

	// Arithmetic Operators (+ - * / % **)

	$x = 10;
	$y = 2;

	var_dump($x + $y); var_dump($x - $y); 
	var_dump($x * $y); var_dump($x / $y);
	var_dump($x % $y); var_dump($x ** $y);
	
	echo "To a string variable like '10' if i put +$ before variable it casts as integer.\n";
	$xx = "10";
	var_dump($xx); // As usual string "10" 2 chars.
	var_dump(+$xx); // Casts to int 10.

	echo "To a string variable like '10' if i put -$ before variable it casts as negative integer.\n";
	$xx = "10";
	var_dump($xx); // As usual string "10" 2 chars.
	var_dump(-$xx); // Casts to int -10.
	
	/* 
		division: ($x / $y) result will be always float unless
		both operands are integers and evenly divisible. 
		x = 10 / y = 2 result: int(5)
		x = 10 / y = 3 result: float(3.33333333)
		x = 10 / y = 0 result: Fatal Error (Uncaught DivisionByZeroError)

		# Division By Zero error elimination by fdiv($x, $y);
		will result in: float(INF) 
	*/
	var_dump(fdiv(10, 0)); // float(INF)

	/*
		modulo: ($x % %y) result will be integer.
		if any decimal present then it will be discarded.
		x = 10 % y = 2 result: int(0)
		x = 10.5 % y = 2.9 result: int(0)

		# if we want to use float in modulo operation we have to use
		fmod($x, $y) then it will result in float.
		x = 10.5 % y = 2.9 result: float(1.80000000000000003)

		If x = 10 % y = -3 result: int(1) that minus of y is discarded.
		because is x divided by y.
		if x = -10 % y = 3 result: int(-1) that includes negative.
	*/
	$fx = 10.5;
	$fy = 2.9; var_dump(fmod($fx, $fy));

	$fx = -10;
	$fy = 2; var_dump(fmod($fx, $fy)); // float(-0)





	// Assignment Operators (= += -= *= /= %= **=)

	$x = 5; // Assign left to right( 5 to x)
	$x = $y = 10;
	// $x = ($y = 10) + 5; // Y = 10 then 10 + 5 to x
	var_dump($x, $y);





	// String Operators (. .=)

	$x = "hello";
	$x .= " world 1123";
	var_dump($x);



	// Comparison operators (== === != > < !==  >= <= <==> ?? ?:)

	$x = 5; $y = 3;

	var_dump($x == $y); // Loose comparison (Only compares values: Type conversion happens here.) // False
	var_dump($x === $y); // Strict comparison (Only compares values and data types) // False 

	$x = '5'; $y = 5;
	var_dump($x == $y); // Loose comparison (Only compares values)  // True
	var_dump($x === $y); // Strict comparison (Only compares values and data types) // False 

	/* Also have: 
		!= Loose, !== Strict
		x > y  [x greater than y] , x < y [x less than y]
	*/

	/* Spaceship Operator: 
		x <=> y result:
		0 if x == y
		-1 if x < y
		1 if x > y
	*/
	$x = 5; $y = 10;
	var_dump($x <=> $y);

	/*
		String comparison loose type and strict type:
		
		# Loose comparison: result in false (h not found)
		because: h is in the 0th index.
		here $y = 0 and in loose comparison (==)
		0 == false which evaluates true
		so the output is 'h not found!'

		# Strict comparison have not this problem.
		$y === false will have it's data type checked.
		$y here is integer and false is a boolean type.
		it doesn't match and the output will print
		'h found at index 0'
	*/
	 
		$x = "hello"; $y = strpos($x, 'h');

		if($y === false) { // Check here.
			echo "H not found!\n";
		} else {
			echo "H found at index " . $y . "\n";
		}


		/* 
			# Conditional operators ?? and ?:
			
			?: ternary operators (Needed three values)
			$var = (Expression to check) ? "Prints if evaluation is true" : "Prints if evaluation is false";

		*/

		$hFound = $y === false ? 'H not found' : 'H found at index ' . $y;
		echo $hFound . "\n";

		/* 
			# ?? is the operator to check null.
			$x = null;
			$y = $x ?? 'hello';
			vd($y);

			$y will be assigned  'hello' only if $x is null.
			otherwise $y will assign $x;
		*/
			$x = null;
			$y = $x ?? 'hello';
			var_dump($y); // Hello

			$a = 'Ouch';
			$b = $a ?? 'Hello.';
			var_dump($b); // "Ouch";




	// Error Control Operator (@)
	
	
	
	




 ?>
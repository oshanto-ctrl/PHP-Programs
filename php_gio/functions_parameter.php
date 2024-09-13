<?php 


	/* Functions */
	/* Parameters */

	declare(strict_types=1);

	// mul(Parameters...)
	function mul(int|float $x, int|float $y = 1) {
		return $x * $y;
	}

	// Invoke function mul(Arguments...)
	echo mul(5.0, 10);

	echo "\n";

	// Invoke function mul(Arguments...)
	echo mul(5.0);


	/**
	 * # Pass by value and pass by reference.
	 * value $x;
	 * reference &$x;
	 * 
	 * function game() takes four arguments (point, health, hits) as parameters
	 * two by value, two by reference. Calculates by the parameters and show a result.
	 * 
	 * 
	**/

	function game(int &$health, int &$moves, int $points, int $hits): string {

		$damage = (5 * $hits); // calculates the damage.
		$points = (10 * $moves); // calcuates the moves.

		$health -= $damage; // Calcualte remaining health.

		$moves -= 1; // Decrease move by 1.

		$status = '';

		if($points >= 100 && $health < 100) {
			$status = "Alive. Go attack again with remaining moves.\n";
		} else {
			$status = "You're finished.\n";
		}

		return $status;

	}


	$health = 100; $moves = 5;

	$points = 8; $hits = 7;

	echo "\nBefore invoking the function health and moves are: ";
	echo $health . "\t" . $moves . "\n";

	$status = game($health, $moves, $points, $hits); 
	
	echo $status;

	echo "\n";
	echo "After invoking the function helath and moves are: ";
	var_dump($health, $moves); // Health and moves are passed by reference.
	
	echo "\n";
	


	/** 
	 * multiple arguments as parameters
	 * splat operator. function fun(...$numbers) {}
	 * 
	 * 
	 * **/

	function sum($a, $b, ...$numbers): int|float {
		$sum = 0;

		foreach ($numbers as $number) {
			// code...
			$sum += $number;
		}
		// return array_sum($numbers)
		return $sum;
	}

	$a = 6.8; $b = 7;
	echo sum($a, $b, 50, 100, 25.90, 8, 9) . "\n\n\n";





	/**
	 * # Named Arguments
	 * 
	 * Order of arguments change problem while
	 * passing it to function.
	 * 
	 * */

	function namedArg(int $x, int $y): int {
		
		if($x % $y === 0) {
			return $x / $y;
		}

		return $x;
	}

	$x = 6; $y = 3;

	var_dump (namedArg($x, $y)); // Gives 2. Which is correct. Passing positional arguments.

	var_dump(namedArg($y, $x)); // Gives 3. Order of passing changed, just returns the value of y. Incorrect.

	var_dump(namedArg(y: $y, x: $x)); // Gives 2. This is how set namedArguments.

	// Unpack the assoc. array and send it.
	// It will result in 1
	$arr = ['x' => 1, 'y' => 2]; // ['y' => 2, 'x' => 1] will the same.
	var_dump(namedArg(...$arr)); 

 ?>
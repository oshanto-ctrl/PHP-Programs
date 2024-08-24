<?php 

	/* OPERATORS FILE 2 */

	// Error Control Operator (@)
	// $x = file("foo.txt"); // Gives error
	$x = @file("foo.txt"); // Doesn't prints the error. 

	// Increment / Decrement Operator (++, --)
	$x = 10;
	$x++; $x--; 
	++$x; --$x;

	// Logical Operators (&& || ! and or xor)
	$a = true; $b = false;
	var_dump($a && $b); // false var_dump($a || $b); // true

	// $z = $x and $y;

	// Bitwise Operators (& | ^ ~ << >>)

	// &
	$x = 6; $y = 3; var_dump($x & $y); // 2
	$x = 6; $y = 3; var_dump($x | $y); // 7
	$x = 6; $y = 3; var_dump($x << $y); // 48 
	$x = 6; $y = 3; var_dump($x >> $y); // 0

	// Array Operators (+ == === != <> !==)

	// Execution Operators (``)

	// Type Operators (instanceof)

	// Nullsafe Operator - PHP8 (?)

	




 ?>
<?php 

/* return / declare / goto */


/* Return */

function sum(int $x, int $y) {
	$z = $x + $y;

	return $z;
}


$x = sum(5, 10);

// echo $x;
// return; // The below won't print
// echo "Hello World\n";


/* Declare */

// declare - ticks
$x = 3; $y = 5; $z = $x * $y;

function onTick() {
	echo "Tick\n";
}

register_tick_function('onTick');
declare(ticks=3);

$i = 0;
while($i < 10) {
	echo $i++ . "\n";
}

// declare = encoding

// declare - strict_types

declare(strict_types=1);// 

 ?>
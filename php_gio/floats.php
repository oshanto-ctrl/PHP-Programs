<?php 

/* FLOATS */

$x = PHP_FLOAT_MAX;

echo $x;

var_dump($x);

echo "\n";

$y = (0.1 + 0.7) * 10;
var_dump($y);
echo "\n";
var_dump(floor($y)); // 7

$y = (0.1 + 0.2) * 10;
var_dump($y);
echo "\n";
var_dump(floor($y)); // 3
var_dump(ceil($y)); // 4 

/* Comparing Floating Numbers */
$x = 0.23;
$y = 1 - 0.77;
echo "\n";
var_dump($x, $y);

if($x === $y) {
	echo "\n Same \n";
} else {
	echo "Not Same \n";
}


echo NAN . "\n";

echo INF . "\n";

echo PHP_FLOAT_MAX * 2; echo "\n";

var_dump(is_finite(PHP_FLOAT_MAX * 2));
echo "\n";

/* Float Typecasting */

$a = 10;
var_dump((float) $a);
echo "\n";
$x = "10.3abcd";
var_dump((float) $x);


?>
<?php
	
	/* Loops */

	// while
	$i = 0; 
	while($i <= 5) {
		echo "{$i} "; $i++;
	}
	// break has a numeric parameter: break n; to stop n level of block.
	echo "\n";

	// do-while
	// 1 do block will execute before the while block condition gets checked.
	$j=1;
	do {
		echo "{$j}, "; $j++ . ',';
	} while($j <= 6);

	// for
	for($k = 0; $k< 10; ++$k) {
		echo "Numbers $k \n";
	}

	// for(; ;) is like while(true) => infinite loop
	$str = "iamsorry"; for($i = 0; $i < strlen($str); $i++) {
		echo $str[$i] . " ";
	} echo "\n";



	// foreach
	// Iterates over array and object

	$pl = ['a', 'b', 'c', 'd'];

	foreach ($pl as $l) {
		echo $l . " \n";
	}



?>
<?php 
	
	require 'helpers.php';

	/* Built in Array Functions */
	
	/* array_chunk() Split an array into chunks */
	
	// array_chunk(array $array, int $length, bool $preserveKeys = false): array
	// $preserveKeys = true will use the keys of original array $items. [a] => 1.
	// False by default.
	
	/* If $length is given which exceeds the number of items in the array, it will
		store all of them in 0th index and no other index will be there.
		array_chunk($items, 7, true); will print like follwing:
		
		Array
			(
			    [0] => Array
			        (
			            [a] => 1
			            [b] => 2
			            [c] => 3
			            [d] => 4
			            [e] => 5
			        )

			)

			If length is less than 1, a ValueError will be thrown.

	*/
	$items = [
				'a' => 1,
				'b' => 2,
				'c' => 3,
				'd' => 4,
				'e' => 5,
			];

	echo "\n\nArray Chunk:\n";
	prettyPrintArray((array_chunk($items, 2, true)));



	/* array_combine() */

	// array_combine(array $keys, array $values): array

	/*
		Creates an array by using the values from the keys array as keys and the values from the values array as the corresponding values.
		
		If the number of elements in key and values doesn't match it gives valueError.
		If two consecutive keys are the same, then second one prevails. (User Contribution:loureirorg at gmail dot com)
	*/

	$fruitKeys = array('green', 'red', 'yellow');
	$fruitValues = array('papaya', 'apple', 'banana');

	$myFruitCart = array_combine($fruitKeys, $fruitValues);

	echo "\n\nArray Combine:\n";
	print_r($myFruitCart);



	/* array_filter() */
	
	// array_filter(array $array, ?callable $callback = null, int $mode = 0): array

	/*
		Iterates over each value in the array passing them to the callback function. If the callback function returns true, the current value from array is returned into the result array.

		Array keys are preserved, and may result in gaps if the array was indexed. The result array can be reindexed using the array_values() function.
		
	*/

	// Check if number is even.
	function even(int $i): int {
		return !($i & 1);
	}

	$array = [1, 2, 3, 4, 5, 6, 7, 8, 9];

	$evens = array_filter($array, "even"); // New array stores all the even

	$odds  = array_filter($array, fn($i) => $i&1);

	echo "\n\nArray Filter(With Call back):\n";
	echo "Evens: \n";
	print_r($evens);
	
	// With array_values() to correct indexing
	print_r(array_values($evens));

	echo "Odds: \n";
	print_r($odds);
	
	// With array_values() to correct indexing
	print_r(array_values($odds));



	echo "\n\n Array Filter (Without Callback):\n";

	$entry = [
		0 => 'foo', 1 => 'false', 2 => -1, 3 => null, 4 => '', 5 => '0', 6 => 0,
	];

	// Filtering without any callback
	print_r(array_filter($entry));

	/* Resuls:
		Array
			(
			    [0] => foo
			    [1] => false
			    [2] => -1
			)
*/

	

	/* array_keys() */

	// array_keys(array $array, mixed $filter_value, bool $strict = false): array

	/*
		array_keys() returns the keys, numeric and string, from the array.

		If a filter_value is specified, then only the keys for that value are returned. 
		Otherwise, all the keys from the array are returned.

	*/

	$keysArray = [
		'a' => 5, 'b' => 10, 'c' => 15, 'd' => 5, 'e' => 10,
	];

	echo "\n\n array_keys(): ";
	// Print all the keys
	$keys = array_keys($keysArray);
	print_r($keys);

	// Search specific key of a value
	// '20' string: strict comparison = true so, no values returned.
	$findKey = array_keys($keysArray, '20', true); print_r($findKey);



	/* array_map() */

	// array_map(callable|null $callback, array $array, array ...$array): array

	/*


	*/

	$mapArr = [1, 2, 3, 4, 5, 6];

	$mapArr = array_map(fn($number) => $number * 3, $mapArr);

	print_r($mapArr);

	
	/* array_merge() */

	// array_merge(array ...$arrays): array

	/* 

	*/

	$array1 = [1, 2, 3]; $array2 = [4, 5, 6]; $array3 = [7, 8, 9];

	$merged_array = array_merge($array1, $array2, $array3);

	echo "\nMerged Array: ";
	print_r($merged_array);

	/* array_reduce() */

	// array_reduce(array $array, callable $callback, mixed $initial = null): mixed

	/* 
		array_reduce — Iteratively reduce the array to a single value using a callback function
	*/	

	$invoiceItems = [

		['price' => 9.99, 'qty' => 3, 'desc' => 'Item 1'],
		['price' => 29.99, 'qty' => 1, 'desc' => 'Item 2'],
		['price' => 149, 'qty' => 1, 'desc' => 'Item 3'],
		['price' => 14.99, 'qty' => 2, 'desc' => 'Item 4'],
		['price' => 4.99, 'qty' => 4, 'desc' => 'Item 5'],

	];

	// get the total number of price * qty

	$total = array_reduce($invoiceItems,
		fn ($sum, $item) => $sum + $item['qty'] * $item['price'],
	 );

	echo "\nTotal price with array_reduce: ";
	print_r($total);


	/* array_search() */

	// array_search(mixed $needle, array $haystack, bool $strict = false): int|string|false

	$haystack = ['a', 'b', 'c', 'D', 'E', 'ab', 'bc', 'cd', 'b', 'd'];

	$needle = 'a'; // if 'b' it will take the first occurence.

	$search = array_search($needle, $haystack); 
	echo "\nArray Search: ";
	print_r($search);

 ?>
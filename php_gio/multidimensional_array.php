<?php 


/* Multidimensional ARRAY */

$programmingLanguages = [
	// A php array
	'php' => [
		"creator" => "Rasmus Lerdorf",
		"extension" => ".php",
		"isOpenSource" => true,
		// Versions is an array of associative array
		"versions" => [
			["version" => 8, "releaseDate" => "Nov 26, 2020"],
			["version" => 7.4, "releaseDate" => "Nov 28, 2019"],
		],
	],

	// A Python array
	'python' => [
		"creator" => "Guido Van Rossum",
		"extension" => ".py",
		"isOpenSource" => true,

		"versions" => [
			["version" => 3.9, "releaseDate" => "Oct 5, 2020"],
			["version" => 3.8, "releaseDate" => "Oct 14, 2019"],
		],
	],
];


echo "\n\n<pre>";
print_r($programmingLanguages);
echo "</pre>\n";

// Retrive PHP is opensource
echo "PHP is open source? Ans: " . $programmingLanguages['php']['isOpenSource'] . "\n"; // 1 = True

// Retrive Python's version 3.8 release date
// @TIP = Look the dimensions carefully while accessing.
echo "\nRelease date of python 3.8 is: ";
echo $programmingLanguages['python']['versions'][1]['releaseDate'];


?>
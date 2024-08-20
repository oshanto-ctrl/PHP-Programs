<?php 

/* ARRAY */

/* One Dimensional Array */

// Array is 0 index
$programmingLanguages = ["PHP", "Java", "C++"];
$firstElement = $programmingLanguages[0];
echo $firstElement . "\n";


// Pushing element in the array (Append)
$programmingLanguages[] = "Python";

// Another method to push element in array
// array_push(array_name, value)
array_push($programmingLanguages, "Rust");


echo "\n<pre>";
print_r($programmingLanguages);
echo "</pre>\n";

// count the num of element in array
echo count($programmingLanguages) . "\n";


// Check if item exists
var_dump(isset($programmingLanguages[3])); // False




/* Removing an array element using
array_shift, array_pop, re-indexing */

$demoarray = ['a', 'b', 'c', 'de', 'e', 'f', 'g', 'h'];
echo array_pop($demoarray); // Last element of the array 'h' will be popped
echo "\n New demoarray using array_pop(): ";
print_r($demoarray);

array_shift($demoarray); // First element of the array 'a' will be popped
// It will re-index the array (All numeric values but not string value)
echo "\n New demoarray using array_shift(array): ";
print_r($demoarray);

// unset() Destroy element by index. If no index provided then whole array is destroyed.
unset($demoarray[4]);
echo "\n New demoarray using unset($ a[4]): ";
print_r($demoarray);




?>
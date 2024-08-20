<?php

/* Associative ARRAY */
$programmingLanguages = [
	'php' => '8.0.1',
	'Python' => '3.10',
	'c++' => 'cpp17',
];

// add a new element in associative array
$programmingLanguages['go'] = '1.15';

echo "\n\n<pre>";
print_r($programmingLanguages);
echo "</pre>\n";


// Check if array key exists (With typecasting array)
$arr = ['a' => 1, 'b' => null];
var_dump(array_key_exists('a', $arr)); // Bool(true) Key exists
var_dump(isset($arr['a'])); // Is key exists and not null (True)

var_dump(array_key_exists('b', $arr)); // Bool(true) Key exists
var_dump(isset($arr['b'])); // Is key exists and not null. 'b' is null (False)


?>
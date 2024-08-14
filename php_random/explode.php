<?php 
$temp = explode(' ', "Well i think smiths is my favorite.");
print_r($temp);


echo "\n";

shuffle($temp);
$j = 0;
foreach ($temp as $val) {
	echo "$j: $val\n";
	++$j;
}
?>
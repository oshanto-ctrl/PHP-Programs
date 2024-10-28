<?php
	
	$inputString = "hello";

	$inputStringLength = strlen($inputString);

	$outputString = "";

	/*
		Loop through the input string
		in reverse from the last index of $inputString
		to the first, appending each characters to the
		$outputString variable.

	*/
	for($i= $inputStringLength - 1; $i >= 0; $i--) {
		$outputString .= $inputString[$i];
	}

	echo $outputString . "\n"; // Expected output: "olleh"

	/* String reverse can be done by strrev() built-in function in php */
?>
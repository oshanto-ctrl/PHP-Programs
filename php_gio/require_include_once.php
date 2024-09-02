<?php 

	/* require / require_once / include / include_once */


	/* 
		Syntax:

		include 'file_path';
		include 'reform.php';

		
		# include will result in a warning, continue the script running.
		# require will result in an error and stop the script running.

		Overall reason, use require_once for a file.

	*/

	require "include_file.php"; // require_once will only require 1 time


	echo "\nMeow Meow\n";


 ?>
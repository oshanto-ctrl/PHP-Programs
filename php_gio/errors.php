<?php 
	
	// Error Handling
	
	/* 
		Error reporting level can be changed
		to get error as required.

		https://www.php.net/manual/en/errorfunc.constants.php 

	*/
	
	
	// Turn of the error reporting
	
	/*
	error_reporting(0);

	echo 1/0 . "\n";
	*/

	// Report every errors. (Warnings & Errors) 
	// error_reporting(E_ALL);

	// test
	// echo $_SERVER['e']; // PHP Warning 
	// echo 1/0; // PHP Fatal Error

	/*
	// ** Report only errors, do not report any warnings **

	error_reporting(E_ALL & ~E_WARNING);
	
	// test
	echo $_SERVER['e']; // PHP Warning (Didn't showed on compile.) 
	echo 1/0; // PHP Fatal Error
	
	*/

	
	/*
	// ** Report only warnings, do not report any fatal errors **

	error_reporting(E_ALL & ~E_ERROR);

	// test
	echo $_SERVER['e']; // PHP Warning 
	echo 1/0; // PHP Fatal Error (Didn't showed on compile.)
	
	*/



	/** Trigger Error **/
	/* 
		Triggering erros manually requires only the USER Errors.
		display_errors configuration must be off in production.

	*/


	// trigger_error("Example Error Here!", E_USER_ERROR);
	// echo 1;

	/** PHP CUSTOM HANDLE ERRORS **/

	/* 

		PHP gives the feature to custom handle errors at runtime.
		Cutom error handler.
		
		error_handler() has have to get 2 arguments.
		first arg: error type : int
		second arg: error message : string

		optional arguments(file:string and line number:int) the file and where error happend.

	*/

		function errorHandler(
			int $type, 
			string $message, 
			?string $file = null, 
			?int $line = null) {

			echo $type . ': ' . $message . ' in ' . $file . ' on line ' . $line;

			exit; // stop running the script
		}


		// Register it as out error handler
		set_error_handler('errorHandler', E_ALL); // Overrides error_reporting()

		echo $x; /* 2: Undefined variable $x in C:\xampp\htdocs\PHP-Programs\php_gio\errors.php on line*/

 ?>
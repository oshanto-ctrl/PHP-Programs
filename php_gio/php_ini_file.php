<?php
	
	/* php.ini & configuration */

	/* Learn about directives that should be 
		enabled or disabled in particular situation */

	// error_reporting, error_log, display_errors
	var_dump(ini_get('error_reporting')); // 32767 E-ALL - value Error value


	var_dump(ini_set('display_errors', 0));
	$a = [1];

	echo "$a[3]";


?>
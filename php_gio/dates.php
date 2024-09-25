<?php 

/* Date & Time */

/* 
	Time function: Prints a large integer in seconds.
	time()
	we can add or substract minutes from it to 
	get future or past time.
	It count time from January 1st 1970
	
*/
$currentTime = time();
echo "\nCurrent time using time() in seconds = " . $currentTime . "\n";

$fiveDaysInFutureTime = $currentTime + (5 * 24 * 60 * 60);
echo "Time in seconds using time() after 5 days from current time = " . $fiveDaysInFutureTime . "\n";

$oneDayInPastTime = $currentTime - (1 * 24 * 60 * 60);
echo "Time in seconds using time() before 1 days from current time = " . $oneDayInPastTime . "\n";


/* Timezone */

/* 
	By default the date() uses the timezone that is
	set in php's configuration file. It can be override.

	Gio Recommend to set the timezone to UTC. That way 
	it is easy to manage multiple timezones.
	And Can do the conversion when displaying 
	to the user.

	https://www.php.net/manual/en/timezones.php
*/
date_default_timezone_set('Asia/Dhaka');

echo "\nMy Timezone: " . date_default_timezone_get() . "\n"; 



/* Date() function */

/* 
	date() accept parameters.
	https://www.php.net/manual/en/datetime.format.php

	
*/

// m = Numeric representation of a month, with leading zeros
// d = Day of the month, 2 digit with leading zeros
// Y = Full numeric representation of a year, at least 4 digits
// g = 12-hour format of an hour without leading zero
// i = minutes with leading zeros
// a = Lowercase Ante meridiem and Post Meridiem am or pm
$dateToday = date('d/m/Y g:ia'); 
echo "\n\nToday's date and time: " . $dateToday . "\n";

echo "\nDate of five days into the future: " . date('d/m/Y g:ia', $fiveDaysInFutureTime) . "\n";


/* MKTIME() function */

/* 
	mktime() to get unix timestamp based on argument passed.



*/

echo date('d/m/Y g:ia', mktime(0, 0, 0, 4, 10, null));

/* 
	String to time function
	strtotime() function takes a date and convert it to
	timestamp.

*/
echo "\nConverting '2021-01-18 07:00:00' strtotime()"; 
echo strtotime('2021-01-18 07:00:00') . "\n";

echo "\nTomorrow's date " . date('d/m/Y g:ia', strtotime('tomorrow'));
echo "\nEnd of February 2024 " . date('d/m/Y g:ia', strtotime('last day of february'));
echo "\nThird sunday of july 2024 " . date('d/m/Y g:ia', strtotime('third sunday of july'));

/* Date parse */
/*
	date_parse(date)
	https://www.php.net/manual/en/datetime.formats.php#datetime.formats.relative

*/

	var_dump(date_parse("2006-12-12 10:00:00.5"));

?>
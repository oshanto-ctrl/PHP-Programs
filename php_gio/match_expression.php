<?php 

/* Match Expression */

/* 	
	1) Do not have to use break statement.
	
	2) Must have suitable case in match or it' will 
		throw an error that it couldn't handle it.
		so use appropriate cases or use a deafult like
		switch operator.
	
	3) Match expression does strict comparison, 1 == '1'
		switch expression does loose comparison. 1 != '1'

	4) Can use funtion or logical or logical expression in cases.
		a > b => 'Paid',
		statement will be only 1 line.
 */

$paymentStatus = 1;

$paymentStatusDispaly = match($paymentStatus) {
	
	1 => print 'Paid', // Remote print for only 'Paid' output

	2, 3 => print 'Payment Declined',

	0 => print 'Pending Payment',

};

// Echo paymentStatusDisplay
echo $paymentStatusDispaly;



echo "\n\n\nDays in Month Function\n";

// Two parameters $month (string) $year (integer)
// Function returns an integer (int) which will be the 
// number of days in the given month.

function days_in_month(string $month, $year): int {

	return match(strtolower(substr($month, 0, 3))) {
		// Takes the first three characters of the month name using substr()
		// converts to lowercase with strlower()
		// match against various cases

		'apr', 'jun', 'sep', 'nov' => 30,
		
		'jan', 'march', 'may', 'jul', 'aug', 'oct', 'dec' => 31,

		'feb' => is_leap_year($year) ? 29 : 28,

		default => throw new InvalidArgumentException("Bogus Month"),
		

	}; // Match expression ends
}


// Leap year function. Integer parameter $year returns bool

function is_leap_year(int $year): bool {
	return ($year % 4 == 0 && $year % 100 != 0) || ($year % 400 == 0);
}



// Driver
$month = "February";
$year = 2024;

$queryForDays = days_in_month($month, $year);

echo "\n$month of year $year has $queryForDays days in it.\n\n";


 ?>
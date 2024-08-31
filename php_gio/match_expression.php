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
	
	1 => print 'Paid',

	2, 3 => print 'Payment Declined',

	0 => print 'Pending Payment',

};

// Echo paymentStatusDisplay
echo $paymentStatusDispaly;








 ?>
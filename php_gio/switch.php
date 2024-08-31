<?php 

/* SWITCH CASE */

$paymentStatus = '';

switch($paymentStatus) {

	case 'paid':
		echo "Paid.\n"; break;

	case 'rejected':
	case 'declined':
		echo "Payment Declined.\n"; break;

	case 'pending':
		echo "Pending Payment.\n";break;

	default:
		echo "Unknown Payment Status.\n";
}

// Another example (For loop)

$rollNumbers = [0, 1, 2]; 

foreach ($rollNumbers as $rollNumber) {
	// code...


switch ($rollNumber) {

	// If we want to use keyword continue
	// then we have to give the optional argument.
	// continue 2;
	case 1:
		// code...
		echo "Standup roll no. 1\n";
		continue 2;

	case 2:
	case 3:
		echo "Standup roll no. 2, 3\n"; 
		break;

	case 0:
		echo "All of you standup.\n";
		break;
	
	default:
		// code...
		echo "HOUSE ON FIRE!!!\n";
		break;
}
}

 ?>
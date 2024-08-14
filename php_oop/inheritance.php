<?php 

// Declare an object
$person = new Subscriber;
$person->name = "Fre-ready";
$person->password = "freddyIsReady";
$person->phone = "012 345 678";
$person->email = "freddyHere@fred.com";

// Call the display method from Subscriber Class
$person->display();

// User Class
class User {
	public $name, $password;

	function save_user(){
		echo "Save user code here.\n";
	}
}


// Subscriber Class that extends User Class
class Subscriber extends User {
	public $phone, $email;

	// display() method to display user's information
	function display() {
		echo "Name: " . $this->name . "\n";
		echo "Password: " . $this->password . "\n";
		echo "Email: " . $this->email . "\n";
		echo "Phone: " . $this->phone . "\n";
	}
}


?>
<?php 

// Object 
$cat = new Tiger;
echo "Tigers have ...\n";
echo "Fur: " . $cat->fur . "\n";
echo "Stripes: " . $cat->stripes . "\n";



// Wildcat Class
class Wildcat {
	public $fur;

	function __construct(){
		$this->fur = "TRUE";
	}
}


// Tiger Class that extends Wildcat Class
class Tiger extends Wildcat {
	public $stripes; // Tigers have stripes

	function __construct(){

		parent::__construct();	 // Call the parent construct first
		$this->stripes = "TRUE";
	}
}


?>
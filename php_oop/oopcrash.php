<?php  

class Customer{
	private $id;
	private $name;
	protected $email;
	private $balance;

	//constract func
	public function __construct($id,$name,$email,$balance){
		//echo "The Constructor Ran...";
		$this->id = $id;
		$this->name = $name;
		$this->email = $email;
		$this->balance = $balance;
	}
/*
	//desctruct func
	public function __destruct(){
		echo "The Destructor Ran...";
	}

	//method
	public function getCustomer($id){
		$this->id = $id;
		return "john doe";
	}
// method
	public function getEmail(){
		return $this->email;
	} */
	
}


// Main 

$customer = new Customer(1,'brad traversy', 'brad@outlook.com', 22200);
// echo $customer->getCustomer(10) . "\n";

// echo $customer->getEmail();

echo "\n";


// New Class
class Subscriber extends Customer{
	public $plan;

	public function __construct($id,$name,$email,$balance){
	parent::__construct($id,$name,$email,$balance);
	$this->plan = $plan;
	}
	// method
	public function getEmail(){
		return $this->email;
	}

}

$subs = new Subscriber(1,'brad','brad@gmail.com', 22203, "Platinum");

echo $subs->getEmail();

?>
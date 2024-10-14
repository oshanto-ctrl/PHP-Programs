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
	public $plan; public $balance;

	public function __construct($id,$name,$email,$balance, $plan){
	parent::__construct($id,$name,$email,$balance);
	$this->plan = $plan;
	$this->balance = $balance;
	}
	// method
	public function getEmail(){
		return $this->email;
	}

	// Method get balance
	public function getBalance(){
		return $this->balance;
	}

	// Method get plan
	public function getPlan(){
		return $this->plan;
	}

}

$subs = new Subscriber(1,'brad','brad@gmail.com', 22203, "Platinum");

echo $subs->getEmail(); echo "\n";
echo $subs->getBalance(); echo "\n";
echo $subs->getPlan(); echo "\n";

?>
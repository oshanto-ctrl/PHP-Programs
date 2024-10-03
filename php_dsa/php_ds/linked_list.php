<?php
	
	// Implimentation of a linked list data structure.
	
	
	// Class Node
	class Node {
		public int $data;
		public ?Node $next;

		public function __construct(int $data) {
			$this->data = $data;
			$this->next = null;
		}
	}



	// Class LinkedList
	class LinkedList {

		// The dead of the linked list.
		// It can be null if the list is empty.
		private ?Node $head;

		// Constructor initializes an empty list
		public function __construct() {
			$this->head = null;
		} // Construct Method Ends


		// Insert a new node with the given data and the end of the list
		public function insert(int $data): void {

			$newNode = new Node($data);

			if($this->head === null) {

				// If the list is empty, the new node becomes the head.
				$this->head = $newNode;
			} else {

				// Otherwise, traverse and append the new node
				
				// Catch the head node
				$current = $this->head;

				// Traverse to the end of the list
				while($current->next !== null) {
					$current = $current->next;
				}

				// New node appended to the list
				$current->next = $newNode;

			}

		} // Insert Method Ends


		// Traverse and print the entire linked list
		public function printList(): void {
			
			$current = $this->head;

			while($current !== null) {
				echo $current->data . " ";
				$current = $current->next;
			}

			echo "\n";

		}


	} // LinkedList Class Ends



	/** DRIVER **/
	$list = new LinkedList();

	$list->insert(1); $list->insert(2);
	$list->insert(3); $list->insert(4);
	$list->insert(5); $list->insert(6);

	// Print the original list
	$list->printList(); // 1 2 3 4 5 6



?>
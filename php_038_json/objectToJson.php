<?php
	
	class Person {
		private $name;//private的属性不会被序列化成json
		
		public $age;
		
		
		public function __construct($name, $age){
			$this->name = $name;
			
			$this->age = $age;
			
		}
		
		
		public function getName() {
			
			
			return $this->name;
			
		}
		
		
	}
	
	$person = new Person("root", 22);
	
	echo json_encode($person);

?>
<?php
namespace com\php\dog;

include 'SomeAnimal.php';

use com\php\animal\SomeAnimal;

class Dog extends SomeAnimal{
	//绫荤鏈夌殑灞炴�э紝鍙湁鏈被鍙互璁块棶锛岃繖涓拰java鏄竴鏍风殑
	private $color;
	//榛樿涓簆ublic鐨勮闂潈闄�
	var $hello;
	
	//瀛愮被鍙互璁块棶
	protected function eat() {
		
		
		echo "I like fruit";
		
	} 
	
	public function hello() {
		
		
		$this->eat();
	}
	
	
}



?>
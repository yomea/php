<?php
	
	class Person {
		
		public $username;
		
		
		public $age;
		
		
		public function __construct($username, $age) {
			$this->username = $username;
			
			$this->age = $age;
			
			
		}
		
		
	}
	
	$jsonStr = '{"a":1,"b":2}';
	
	/**
	 * object(stdClass)[1]
	 *	  public 'a' => int 1
	 *	  public 'b' => int 2
	 */
	var_dump(json_decode($jsonStr));//默认转化成对象的形式
	//true表示转化成数组
	var_dump(json_decode($jsonStr,true));
	
	


?>
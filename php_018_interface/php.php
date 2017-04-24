<?php
/**
 * php的接口定义
 * php接口定义的方法一定是public的,方法前不能显示使用abstract修饰符,
 * 接口中不能定义成员变量，但是可以定义常量
 * 
 * 接口中不能有static的方法，更没有java中的default方法
 * 
 * 定义的接口在实现类中必须实现
 * 
 * 接口可以继承接口，
 * 
 * php中继承也是单继承，接口可以多现实
 * 
 * Enter description here ...
 * @author Administrator
 *
 */
	namespace com\php;
	
	
	interface Animal {
		
		const TEN = 10;
		
		//static $hello= 20;//不能定义
		
		//public $a = 10;//不能定义
		
		public function eat();
		
		//public  abstract function hello();abstract修饰符必须省略，否则报必须省略修饰符的错误
		
		public function hello();
		
		
	}
	
	interface Grate {
		
		function grate();
	}
	
	interface T extends Grate {
		
		
		function t() ;
		
	}
	
	class Person implements Animal,Grate,T {
		
		public function eat() {
			
			echo "eat rice";
			
		}
		
		function hello(){}
		
		function t(){}
		
		function grate() {
			
			
			echo "wang wang";
		}
		
		
		
	}
	
	
	$person = new Person();
	
	$person->eat();


?>
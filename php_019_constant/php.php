<?php
	namespace com\php;
/**
 * ：：域运算符，在php中用于静态方法的调用
 * 
 * self::
 * 可以调用本类的静态属性，常量，和方法,不能调用普通的成员变量
 * 
 * parent:: 这个和java中的super类似，当时java中super可以调用父类中可见的所有成员
 * 调用父类的静态属性，常量，和方法，不能调用普通的成员变量
 * 
 * 有没有感到非常的诡异，为什么静态调用可以调用非静态的方法？
 * 之所以会这样是因为历史原因。早在php4的时候，php为了紧跟潮流
 * 给php引入了面向对象的思想，那时候为了子类可以调用父类的方法（那时候还没有parent关键字）
 * 直接使用父类类名：：父类的方法，php5后为了解决这个问题就引入了parent，但是
 * 要向下兼容，没办法，这种方式依然存在，
 * 知道这么一回事就好了，以后尽量不要用静态调用的方式去调用非静态的方法就行了。
 * 
 * parent这个有点特殊，可以使用静态方式调用父类的非静态的方法，比较它就是为了这个而存在的
 * 
 * Enter description here ...
 * @author Administrator
 *
 */
//Interfaces may not include member variables
	/*interface K{
	
	var $hello;//错误，接口中不能定义成员变量
}
	*/
	
	class T {
		
		public $c = 30;
		
		public function tt() {
			
			echo "parent invoke";
			
		}
		
		public static function statict() {
			
			
			
		}
		
	}
	
	class Test extends T {
		
		const constant = "hello php";
		
		static $a = 10;
		
		public static $b = 100;
		
		
		public function t() {
			echo parent::tt();
			
			self::$b;//不能访问非静态的属性
			self::h();
			
			//self表示这个类，相当于Test::constant
			echo self::constant . PHP_EOL;//hello php   这里的PHP_EOL是换行符
		}
		
		public  function h() {
			
			echo "不推荐使用静态的方式调用非晶态的方法";
			
		}
		
	}
	
	
	$test = new Test();
	
	echo Test::constant;
	
	echo "<br>";
	
	echo Test::$a;
	
	echo "<br>";
	
	//echo Test::h();//不推荐，会发生警告，历史遗留问题
	
	echo "<br>";
	
	$test->t();
	


?>
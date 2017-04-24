<?php
/**
 * 
 * 子类不会在子类构造器中自动调用父类的构造器，
 * 如果需要调用父类的构造器，需要手动调用
 * parent::__construct();
 * 
 * self代表本身这个类
 * parent代表父类这个类
 * 
 * 如果父类中的$sal是private的，那么输出的结果都是3000
 * 如果父类中的$sal是protected的，那么输出的结果都是5000
 * 应该这样理解，因为php中的子类是无法继承到父类的私有属性的
 * 所以就会给父类分配内存，如果不是私有的，子类是可以继承，是可以被覆写的
 * 好神奇啊！！！
 * java中就不一样的，输出全是3000，因为java中的父类是一定会被分配内存的，php估计是为了简便，省内存

 * Enter description here ...
 * @author Administrator
 *
 */


class employee{
	//private  $sal=3000;
	protected    $sal=3000;
	
	private static $a = 20;
	
	public function __construct(){}
	
	public   function getSal(){	
			
		return $this->sal;
	}		
}

class Manager extends employee {
	protected  $sal=5000;
	
	public static $b = 10;
	
	public function __construct(){
		
		parent::__construct();
		
	}
	
	public function getParentSal(){
		
		return parent::getSal();
	}	
	
	public static function t() {
		
		
		
	}
	
}
$manager = new Manager();
echo "PHP ".phpversion()."<br>";//PHP 5.5.12
echo $manager->getSal();//private 3000 protected 5000
echo "<br>";
echo "parent's \$sal ".$manager->getParentSal();//parent's $sal private 3000 protected 5000
$manager->t();

//$manager->b;php中不能用对象来使用静态的属性，但是静态的方法却可以。
$manager::$b;
Manager::$b;






?>
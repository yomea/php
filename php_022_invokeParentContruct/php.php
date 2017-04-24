<?php

/**
 * ①构造方法名和类名相同(php4版),php5版的构造方法名可以和类名相同，也可以是__construct()
 * ②构造方法没有返回值
 * ③构造方法的主要作用是完成对新对象的初始化，并不是创建对象本身。
 * ④在创建新对象后,系统会自动的调用该类的构造方法，不需要自己写代码调用
 * ⑤一个类有且只有一个构造方法,在php5后虽然__construct()  和 类名() 可以共存，但是实际上也只能使用一个。
 * ⑥如果没有给类自定义构造方法，则该类使用系统默认的构造方法。
 * ⑦如果给类自定义了构造方法，则该类的默认构造方法被覆盖
 * 子类不会自动调用父类的构造方法，需要手动调用
 * __construct() 和 类名() , 当两个同时存在的时候，优先调用__construct(), 请大家以后使用__construct()
 * (1)一旦自定义了一个构造函数，默认的构造函数就被覆盖了,这时在创建对象的时候就要使用自定义的构造函数.
 * (2)一个类只能有一个构造函数.(不能重载)
 * 
 * 如果子类没有定义构造器，父类定义了，那么构造器会被继承。
 *
 * Enter description here ...
 * @author Administrator
 *
 */
class BaseClass {
	function __construct() {
		print "BaseClass 类中构造方法" . PHP_EOL;
	}
}
class SubClass extends BaseClass {
	function __construct() {
		parent::__construct();  // 子类构造方法不能自动调用父类的构造方法
		print "SubClass 类中构造方法" . PHP_EOL;
	}
}
class OtherSubClass extends BaseClass {
	// 继承 BaseClass 的构造方法
}

// 调用 BaseClass 构造方法
$obj = new BaseClass();

echo "<br>";
// 调用 BaseClass、SubClass 构造方法
$obj = new SubClass();
echo "<br>";
// 调用 BaseClass 构造方法
$obj = new OtherSubClass();
echo "<br>";

?>
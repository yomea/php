<?php
/**
 * 一个类中只要出现了抽象的方法，就必须声明为抽象类，这个和java中的抽象类的定义是一样的
 * 抽象类不能被实例化
 * Enter description here ...
 * @author Administrator
 *
 */
abstract class AbstractClass
{
	// 强制要求子类定义这些方法
	abstract protected function getValue();
	abstract protected function prefixValue($prefix);

	// 普通方法（非抽象方法）
	public function printOut() {
		print $this->getValue() . PHP_EOL;
	}
}


class ConcreteClass1 extends AbstractClass
{
	protected function getValue() {
		return "ConcreteClass1";
	}

	public function prefixValue($prefix) {
		return "{$prefix}ConcreteClass1";
	}
}

class ConcreteClass2 extends AbstractClass
{
	public function getValue() {
		return "ConcreteClass2";
	}

	public function prefixValue($prefix) {
		return "{$prefix}ConcreteClass2";
	}
	
}

$class1 = new ConcreteClass1;
$class1->printOut();
echo $class1->prefixValue('FOO_') . PHP_EOL;

$class2 = new ConcreteClass2;
$class2->printOut();
echo $class2->prefixValue('FOO_') . PHP_EOL;

?>
<?php
namespace X\Y;

//include 'php1.php';


//如果有几百个php文件要include，那么就需要进行自动类的搜索加载
//一般情况下我们定义一个php文件的涉及到类的一般都会将php文件名与类名保持一致
function loader($class)
{
	$file = $class . '.php';//$class是类名
	echo $file;
	echo "<br>";
	$file = 'php1.php';
	
	if (is_file($file)) {
		include $file;
	}
}

//这里的这个方法必须写权限定名，否则报找不到方法的错误
\spl_autoload_register('\X\Y\loader');

//$a = 10;

class Autor {
//类中的方法可以被定义为公有，私有或受保护。如果没有设置这些关键字，则该方法默认为公有
	var $name;//类中的属性变量必须用var声明

	var $phoneNume;//不能var $phoneNume = $a，只能var $phoneNume = 10;

	var $article;

	function __construct($name, $phoneNume, $article) {
			
		//global $a;
			
		//$GLOBALS
			
		//$article = $a;
			
		$this->name = $name;
			
		$this->phoneNume = $phoneNume;
			
		$this->article = $article;
			
		//echo __METHOD__;
			
	}

	function getMessage() {
			
		//这里访问类的属性必须使用$this，否则会报错误认为是局部变量
		return "这本名叫《".$this->article->getTitle()."》的作者是：".$this->name;
	}




}


$article = new \A\B\Article("格林童话", "安徒生");

$person = new Autor("安徒生", "110", $article);

$info = $person->getMessage();


echo $info;

?>
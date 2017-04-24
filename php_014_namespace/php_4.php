<?php
namespace namespacename;
class classname
{
	function __construct()
	{
		echo __METHOD__,"\n";
	}
}
function funcname()
{
	echo __FUNCTION__,"\n";
}
const constname = "namespaced";

include 'php_3.php';
//鍔ㄦ�佸悕绉�
$a = 'classname';
$obj = new $a; // prints classname::__construct
$b = 'funcname';
$b(); // prints funcname
echo constant('constname'), "\n"; // prints global

/* note that if using double quotes, "\\namespacename\\classname" must be used */
$a = '\namespacename\classname';
$obj = new $a; // prints namespacename\classname::__construct
$a = 'namespacename\classname';
$obj = new $a; // also prints namespacename\classname::__construct
$b = 'namespacename\funcname';
$b(); // prints namespacename\funcname
$b = '\namespacename\funcname';
$b(); // also prints namespacename\funcname
echo constant('\namespacename\constname'), "\n"; // prints namespaced
echo constant('namespacename\constname'), "\n"; // also prints namespaced




//瀵煎叆鍜屽畬鍏ㄩ檺瀹氬悕绉�
$obj = new Another; // instantiates object of class My\Full\Classname
$obj = new \Another; // instantiates object of class Another
$obj = new Another\thing; // instantiates object of class My\Full\Classname\thing
$obj = new \Another\thing; // instantiates object of class Another\thing






namespace A\B\C;
class Exception extends \Exception {}

$a = new Exception('hi'); // $a 鏄被 A\B\C\Exception 鐨勪竴涓璞�
$b = new \Exception('hi'); // $b 鏄被 Exception 鐨勪竴涓璞�

$c = new ArrayObject; // 鑷村懡閿欒, 鎵句笉鍒� A\B\C\ArrayObject 绫�



?>
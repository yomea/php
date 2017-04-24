<?php

/**
 * 鍛藉悕绌洪棿鐨勫姩鎬佽皟鐢�
 * Enter description here ...
 * @author Administrator
 *
 */

class classname
{
	function test()
	{
		echo __METHOD__,"\n";
	}

	function __construct()//鏋勯�犲櫒锛屼娇鐢╬hp鍐呯疆鐨勬瀯閫犲櫒
	{
		echo __METHOD__,"\n";
	}
	
	/*function classname(){//鏋勯�犲櫒
		
		echo __METHOD__,"\n";
	}*/

}
function funcname()
{
	echo __FUNCTION__,"\n";
}
const constname = "global";

$a = '\classname';//鍔犲叏灞�闄愬畾绗︼紝鍜屼笉鍔犳槸娌℃湁鍖哄埆鐨�

echo $a;

echo "<br>";

echo "......";
//$obj = new $a();
$obj = new $a; // prints classname::__construct

echo "<br>";
echo "......";
echo "<br>";
$obj->test();// prints classname::__construct

echo "<br>";

$b = 'funcname';
$b(); // prints funcname

echo "<br>";

echo constant('constname'), "\n"; // prints global



?>
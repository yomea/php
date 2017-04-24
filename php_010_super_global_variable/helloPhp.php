<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">Name: <input
	type="text" name="fname"> <input type="submit"></form>

<?php

/*
 * $GLOBALS 鏄竴涓叧鑱旀暟缁勶紝閲岄潰鍌ㄥ瓨浜嗘墍鏈夊叏灞�鍙橀噺鐨勫�硷紝閿�煎氨鏄叏灞�鍙橀噺鐨勫彉閲忓悕
 * $_SERVER 鑾峰緱鏈嶅姟鍣ㄧ殑涓�浜涗俊鎭紝鑴氭湰璺緞绛夌瓑锛屾洿澶氱殑鍙傛暟鏌ラ槄鐩稿叧鏂囨。
 * $_REQUEST request璇锋眰锛屽皝瑁呬簡涓�浜涜姹傜殑鏁版嵁鍟ョ殑
 * $_POST post璇锋眰
 * $_GET get璇锋眰
 * $_FILES
 * $_ENV
 * $_COOKIE
 * $_SESSION
 */

header("Content-Type: text/html;charset=utf-8");

$a = 10; //杩欐槸涓叏灞�鍙橀噺

function test() {

	$GLOBALS['z'] = $GLOBALS['a'];//缁�$GLOBALS鍔ㄦ�佹坊鍔犱簡涓�涓柊鐨勯敭鍊煎锛岃繖涓獄宸茬粡鏄叏灞�鍙橀噺浜嗭紝鍙互鍦╬hp涓换鎰忓湴鏂逛娇鐢ㄤ簡銆�

	echo $GLOBALS['z'];

}



test();

echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo $_SERVER['PHP_SELF'];///php_010_super_global_variable/helloPhp.php
echo "<br>";
echo $_SERVER['SERVER_NAME'];//localhost
echo "<br>";
echo $_SERVER['HTTP_HOST'];//localhost
echo "<br>";
//echo $_SERVER['HTTP_REFERER'];
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];//Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/31.0.1650.63 Safari/537.36
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];///php_010_super_global_variable/helloPhp.php
echo "<br>";

echo $_SERVER['SERVER_ADDR'];//127.0.0.1

echo "<br>";

echo "瀹㈡埛绔姹傜殑鍙傛暟鏄�:".(isset($_POST['fname'])?$_POST['fname']:null);

echo "<br>";

echo "瀹㈡埛绔姹傜殑鍙傛暟鏄�:".(isset($_REQUEST['fname'])?$_REQUEST['fname']:null);

?>

</body>
</html>

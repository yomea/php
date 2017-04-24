<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

/*
 * php涓殑杩愮畻闄や簡/涔嬪锛屽叾浠栫殑杩愮畻鐨勬柟寮忓拰缁撴灉鍜屽叾浠栫殑璇█娌℃湁宸埆銆�
 */

header("Content-Type: text/html;charset=utf-8");

$a = 10;

if($a > 10) {
	
	echo "褰撳墠鐨勬暟鍊煎ぇ浜�10<br>";
} else {
	
	
	echo "褰撳墠鐨勬暟鍊煎皬浜庢垨绛変簬10<br>";
}

switch ($a * 10) {
	case 100: {
		echo "绛変簬100<br>";
		
		break;
		
	}
	case 10: {
		
		echo "绛変簬10<br>";
	}
	default:
		
		echo "鍏朵粬鍊�<br>";
	
}


echo date("y-M-d H:m:s");

?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>


<?php

/*
 *php澹版槑鍑芥暟鏂瑰紡
 */
header("Content-Type: text/html;charset=utf-8");

function demo($a, $b=10) {
	
	echo $a + $b;
	
	
}

class cat{
	//澹版槑闈欐�佹柟娉曪紝鍙兘鍦ㄧ被閲岄潰澹版槑
	static function eat() {
		
		echo "invoke static method";
	}
	
}

cat::eat();

echo "<br>";

demo(10);


?>

</body>
</html>

<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

/*
 * php涓殑杩愮畻闄や簡/涔嬪锛屽叾浠栫殑杩愮畻鐨勬柟寮忓拰缁撴灉鍜屽叾浠栫殑璇█娌℃湁宸埆銆�
 */

header("Content-Type: text/html;charset=utf-8");

$a = array("hello", "world");//榛樿涓嬫爣鏄粠0寮�濮嬬殑
$a['ha'] = "ooo";

echo $a['ha'].$a[0];

echo "鏁扮粍鐨勯暱搴︿负".count($a);

echo "<br>";

for( $i = 0; $i < count($a)-1; $i++) {

	echo $a[$i];

	echo "<br>";
}
//瀹氫箟鍏宠仈鏁扮粍
$age=array("Peter"=>"35","Ben"=>"37","Joe"=>"43");

//$y琛ㄧず閬嶅巻鐨刱ey锛�$y_value鏄亶鍘嗙殑key瀵瑰簲鐨勫��,杩欎簺鍚嶅瓧鍙互闅忎究鍙�
foreach($age as $y=>$x){
	echo "Key=" . $y . ", Value=" . $x;
	echo "<br>";
}

/**
 * sort() - 瀵规暟缁勮繘琛屽崌搴忔帓鍒�
 * rsort() - 瀵规暟缁勮繘琛岄檷搴忔帓鍒�
 * asort() - 鏍规嵁鍏宠仈鏁扮粍鐨勫�硷紝瀵规暟缁勮繘琛屽崌搴忔帓鍒�
 * ksort() - 鏍规嵁鍏宠仈鏁扮粍鐨勯敭锛屽鏁扮粍杩涜鍗囧簭鎺掑垪
 * arsort() - 鏍规嵁鍏宠仈鏁扮粍鐨勫�硷紝瀵规暟缁勮繘琛岄檷搴忔帓鍒�
 * krsort() - 鏍规嵁鍏宠仈鏁扮粍鐨勯敭锛屽鏁扮粍杩涜闄嶅簭鎺掑垪
 */
ksort($age);

print_r($age);//print_r鎵撳嵃绗﹀悎绫诲瀷锛屽瀛楃涓诧紝瀵硅薄


?>

</body>
</html>

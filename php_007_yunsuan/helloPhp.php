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

$b = 3;

$x = $a / $b;//鍦╬hp涓袱涓猧nt鍨嬬殑鏁板�肩浉闄わ紝濡傛灉涓嶈兘鏁撮櫎锛岄偅涔堝氨鍙樻垚浜唂loat鍨嬶紝杩欎釜鍜屽湪鍏朵粬璇█鏈夊樊鍒�



echo $x;//3.3333333333333


//鍦╬hp7+涓柊澧炲姞浜唅ntdiv(10,3)杩涜鏁撮櫎
echo "<br>";

echo var_dump($a <> $b);//涓嶇瓑浜庯紝涔熷彲浠ュ啓鎴�!=

echo "<br>";

echo var_dump(1 === '1');//鍊肩浉鍚屽苟涓旂被鍨嬮〉鐩稿悓 false

echo "<br>";

var_dump(1 == '1');//true

var_dump(1 == '1' and 1 == '1');//or xor
var_dump(1 == '1' && 1 == '1');//||


$x = array("a" => "red", "b" => "green"); 
$y = array("c" => "blue", "d" => "yellow"); 
$z = $x + $y; // $x 鍜� $y 鏁扮粍鍚堝苟
var_dump($z);
var_dump($x == $y);
var_dump($x === $y);
var_dump($x != $y);
var_dump($x <> $y);
var_dump($x !== $y);

echo $z['d'];

$z['e'] = "black";//鍙互鐩存帴娣诲姞锛屾病鏈夐檺鍒跺ぇ灏�

echo "<br>";

echo $z['e'];

$username = isset($_GET['user']) ? $_GET['user'] : 'nobody';

echo "<br>";

echo $username;

/*
 *杩欎釜鎰忔�濆氨鏄濡傛灉宸﹁竟澶т簬鍙宠竟杩斿洖1锛屽鏋� 宸﹁竟灏忎簬鍙宠竟灏辫繑鍥炶礋涓�锛屽鏋滀袱杈圭浉绛夊氨杩斿洖闆�
 */
//echo 1 <=> 1; // 0 php7+鎵嶆敮鎸�


?>

</body>
</html>

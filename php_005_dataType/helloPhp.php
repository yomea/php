<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
//澹版槑鍙橀噺a
/*
 * String锛堝瓧绗︿覆锛�
 * Integer锛堟暣鍨嬶級
 * Float锛堟诞鐐瑰瀷锛�
 * Boolean锛堝竷灏斿瀷)
 * Array锛堟暟缁�)
 *  Object锛堝璞★級
 *  NULL锛堢┖鍊硷級
 *  甯搁噺浣跨敤define鍑芥暟瀹氫箟锛屽父閲忔槸鍏ㄥ眬鐨勶紝鍦ㄥ嚱鏁板唴閮ㄤ篃鏃犻渶浣跨敤glob鏉ュ０鏄庝簡
 */

header("Content-Type: text/html;charset=utf-8");

$x = "Hello world!";//瀛楃涓�
echo $x;
echo "<br>"; 
$x = 'Hello world!';
echo $x;

$x = 5985;//Integer
var_dump($x);
echo "<br>"; 
$x = -345; // 璐熸暟
var_dump($x);
echo "<br>"; 
$x = 0x8C; // 鍗佸叚杩涘埗鏁�
var_dump($x);
echo "<br>";
$x = 047; // 鍏繘鍒舵暟
var_dump($x);//浼氬憡鐭ヨ繖涓彉閲忕殑绫诲瀷锛岃繕浼氭妸鍏繘鍒惰浆鍖栨垚鍗佽繘鍒�
$x = 2.8;
var_dump($x);//杩欎釜鍑芥暟浼氭墦鍗板嚭鍙橀噺鐨勭被鍨嬪拰鏁板��

$x = array("hello", "world");
var_dump($x);

$x = 10.365;
var_dump($x);
echo "<br>"; 
$x = 2.4e3;
var_dump($x);
echo "<br>"; 
$x = 8E-5;
var_dump($x);

$x=true;
$y=false;

var_dump($y);

$x = null;

var_dump($x);


//瀹氫箟涓�涓狢ar绫�
class Car
{
    var $color;//瀹氫箟灞炴��
    function Car($color="green") {//榛樿鐨勫弬鏁颁负green
      $this->color = $color;//灏嗗舰鍙傜殑鍊煎鍒剁粰灞炴��
    }
    function what_color() {
      return $this->color;
    }
}

function print_vars($obj) {
   foreach (get_object_vars($obj) as $prop => $val) {
     echo "\t$prop = $val\n";
   }
}

// instantiate one object
$herbie = new Car("white");

// show herbie properties
echo "\herbie: Properties\n";
print_vars($herbie);

define("WIDTH", 30);//甯搁噺涓�缁忓畾涔夊氨涓嶈兘鍐嶆洿鏀癸紝杩樻湁涓彲閫夊弬鏁帮紝true琛ㄧず澶у皬鍐欎笉鏁忔劅


var_dump(WIDTH);

?>

</body>
</html>

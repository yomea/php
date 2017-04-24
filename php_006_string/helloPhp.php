<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php

header("Content-Type: text/html;charset=utf-8");

$a = "hello php";

echo $a."I love you!";//.琛ㄧず杩炴帴瀛楃涓诧紝杩欎釜鍜宩ava涓嶅悓锛屼笉鏄敤+

echo "<br />";

echo "$a 瀛楃涓茬殑闀垮害涓�".strlen($a);

echo "<br>";

echo "php 鍦ㄥ瓧绗︿覆鍙橀噺\$a涓殑璧峰浣嶇疆鏄�".strpos($a, "php");


?>

</body>
</html>

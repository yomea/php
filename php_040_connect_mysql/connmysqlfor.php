<?php
/**
 * 面向过程的连接方式,这种方式已经被废弃了，建议以后不要通过这种方式连接数据库，采用mysqli或这pdo的方式
 * Enter description here ...
 * @var unknown_type
 */

$servername = "localhost";
$username = "root";
$password = "root";
$isSuccess = mysql_connect($servername,$username, $password, true);


echo $isSuccess?"success":"failure";


mysql_close($isSuccess);


?>
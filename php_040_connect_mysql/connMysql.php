<?php
/**
 * 面向对象的连接方式
 * Enter description here ...
 * @var unknown_type
 */
$servername = "localhost";
$username = "root";
$password = "root";
 
// 创建连接
$conn = new mysqli($servername, $username, $password);
 
// 检测连接
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
} 
echo "连接成功";

$isSuccess = $conn->query("create database php");



echo $isSuccess ? "创建成功" : "创建失败";


$conn->close();//关闭数据库连接

?>
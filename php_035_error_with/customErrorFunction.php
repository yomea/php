<?php
/**
 * error_level	必需。为用户定义的错误规定错误报告级别。必须是一个数字。参见下面的表格：错误报告级别。
 * error_message	必需。为用户定义的错误规定错误消息。
 * error_file	可选。规定错误发生的文件名。
 * error_line	可选。规定错误发生的行号。
 * error_context	可选。规定一个数组，包含了当错误发生时在用的每个变量以及它们的值。
 */


//创建自定义的错误处理函数
//error_function(error_level,error_message,error_file,error_line,error_context)
//自定义一个错误函数
function customError($errno, $errstr)
{
	echo "<b>Error:</b> [$errno] $errstr<br>";
	echo "脚本结束";
	die();//退出，结束脚本
}

set_error_handler("customError");

echo $a;//Error: [8] Undefined variable: a
?>

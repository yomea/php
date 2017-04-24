<?php
/**
 * PHP 标量类型与返回值类型声明
 * 
 * int
 * float
 * bool
 * string
 * interfaces
 * array
 * callable
 */

// 强制模式 ,可变参数
/*function sum(int ...$ints) 
{ 
   return array_sum($ints); 
} 

print(sum(2, '3', 4.1)); *///9



// 严格模式 
/*declare(strict_types=1); 

function sum(int ...$ints) 
{ 
   return array_sum($ints); 
} 

print(sum(2, '3', 4.1)); *///PHP Fatal error:  Uncaught TypeError: Argument 2 passed to sum() must be of the type integer, string given, called in……


//返回值类型为integer型
/*declare(strict_types=1); 

function returnIntValue(int $value): int 
{ 
   return $value + 1.0; 
} 

print(returnIntValue(5)); */


?>
<?php
/**
 * zend.assertions	1	
1 - 生成和执行代码 (开发模式)
0 - 生成代码，但在执行时跳过它
-1 - 不生成代码 (生产环境)
assert.exception	0	
1 - 断言失败时抛出，可以抛出异常对象，如果没有提供异常，则抛出 AssertionError 对象实例。
0 - 使用或生成 Throwable, 仅仅是基于对象生成的警告而不是抛出对象(与 PHP 5 兼容)
 */
ini_set('zend.assertions', 1); 
ini_set('assert.exception', 1); 

assert(true == false); 
echo 'Hi!'; 
?>
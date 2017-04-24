<?php
/**
 * php中的访问权限
 * public表示出处可以访问
 * protected子类可以访问，这个和java有点不同，java中存在本包的概念，非子类的本包下的类也是可以访问的
 * private只有自己可以访问
 * php中默认的访问权限是public，java中默认的是friendly，仅仅在本包可用
 * 
 * java中没有全局这种概念，也就是每个变量，必须与一个类相关联，变量不可能出现在类声明的外面。
 * 
 * php与java一样不支持多继承
 * 
 * 
 * php 的类声明没有修饰符
 * 
 */
include 'Dog.php';
//注意这里不能在include SomeAnimal.php了，因为Dog.php中已经包含了，不能重复包含

use com\php\dog\Dog;



$dog = new Dog();

$dog->hello();

$dog->hello;




?>
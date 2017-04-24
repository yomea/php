<?php
class MyClass1 {  
   public $obj1prop;    
} 
class MyClass2 { 
   public $obj2prop; 
} 


$obj1 = new MyClass1(); 
$obj1->obj1prop = 1; 
$obj2 = new MyClass2(); 
$obj2->obj2prop = 2; 

$serializedObj1 = serialize($obj1); 
$serializedObj2 = serialize($obj2); 

// 默认行为是接收所有类 
// 第二个参数可以忽略 
// 如果 allowed_classes 设置为 false, unserialize 会将所有对象转换为 __PHP_Incomplete_Class 对象 
//$data = unserialize($serializedObj1 , ["allowed_classes" => true]); 

// 转换所有对象到 __PHP_Incomplete_Class 对象，除了 MyClass1 和 MyClass2 
//$data2 = unserialize($serializedObj2 , ["allowed_classes" => ["MyClass1", "MyClass2"]]); 

print($data->obj1prop); 
print(PHP_EOL); 
print($data2->obj2prop);
?>
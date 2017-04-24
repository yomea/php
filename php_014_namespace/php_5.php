<?php
/**
 * namespace鍜宊_NAMESPACE__鐨勪娇鐢�
 * Enter description here ...
 * @author Administrator
 *
 */
namespace MyProject;

function get($classname)
{
    $a = __NAMESPACE__ . '\\' . $classname;
    return new $a;
}

namespace MyProject;

use blah\blah as mine; // see "Using namespaces: importing/aliasing"

blah\mine(); // calls function blah\blah\mine()
namespace\blah\mine(); // calls function MyProject\blah\mine()

namespace\func(); // calls function MyProject\func()
namespace\sub\func(); // calls function MyProject\sub\func()
namespace\cname::method(); // calls static method "method" of class MyProject\cname
$a = new namespace\sub\cname(); // instantiates object of class MyProject\sub\cname
$b = namespace\CONSTANT; // assigns value of constant MyProject\CONSTANT to $b


namespace\func(); // calls function func()
namespace\sub\func(); // calls function sub\func()
namespace\cname::method(); // calls static method "method" of class cname
$a = new namespace\sub\cname(); // instantiates object of class sub\cname
$b = namespace\CONSTANT; // assigns value of constant CONSTANT to $b






namespace foo;
use My\Full\Classname as Another;

// 绛夌敤浜� use My\Full\NSname as NSname 鐩稿悓
use My\Full\NSname;

//use My\Full\Classname as Another, My\Full\NSname;

// 瀵煎叆涓�涓叏灞�绫�
use \ArrayObject;

$obj = new namespace\Another; // 瀹炰緥鍖� foo\Another 瀵硅薄
$obj = new Another; // 瀹炰緥鍖� My\Full\Classname銆�瀵硅薄
NSname\subns\func(); // 璋冪敤鍑芥暟 My\Full\NSname\subns\func
$a = new ArrayObject(array(1)); // 瀹炰緥鍖� ArrayObject 瀵硅薄
// 濡傛灉涓嶄娇鐢� "use \ArrayObject" 锛屽垯瀹炰緥鍖栦竴涓� foo\ArrayObject 瀵硅薄




namespace A\B\C;

/* 杩欎釜鍑芥暟鏄� A\B\C\fopen */
function fopen() { 
     /* ... */
     $f = \fopen(); // 璋冪敤鍏ㄥ眬鐨刦open鍑芥暟
     return $f;
} 



?>
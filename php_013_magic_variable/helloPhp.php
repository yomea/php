<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>


<?php

//鍛藉悕绌洪棿绫讳技涓巎ava涓璸ackage姒傚康
namespace MyProject;
/*

 */
header("Content-Type: text/html;charset=utf-8");

echo "杩欐槸绗�".__LINE__."琛�";

echo "<br>";

echo '璇ユ枃浠朵綅浜� " '  . __FILE__ . ' " ';

echo "<br>";

echo '璇ユ枃浠朵綅浜� " '  . __DIR__ . ' " ';

echo "<br>";

function test() {
    echo  '鍑芥暟鍚嶄负锛�' . __FUNCTION__ ;
}

echo "<br>";
class test {
    function _print() {
        echo '绫诲悕涓猴細'  . __CLASS__ . "<br>";
        echo  '鍑芥暟鍚嶄负锛�' . __FUNCTION__ ;
    }
}
$t = new test();
$t->_print();


class Base {
    public function sayHello() {
        echo 'Hello ';
    }
}
 
/*trait SayWorld {//php5.4鏂板鐨�
    public function sayHello() {
        parent::sayHello();
        echo 'World!';
    }
}*/
 
class MyHelloWorld extends Base {
  //  use SayWorld;
}
 
$o = new MyHelloWorld();
$o->sayHello();

function yes() {
    echo  '鍑芥暟鍚嶄负锛�' . __METHOD__ ;
}
yes();



echo '鍛藉悕绌洪棿涓猴細"', __NAMESPACE__, '"'; // 杈撳嚭 "MyProject"

?>

</body>
</html>

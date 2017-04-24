<?php
namespace Foo\Bar;
include 'file1.php';//绫讳技c璇█涓�鏍峰皢php鏂囦欢鍖呭惈杩涙潵

const FOO = 2;
function foo() {}
class foo
{
	static function staticmethod() {}
}

/* 闈為檺瀹氬悕绉帮紝鐩稿褰撳墠鐨勫懡鍚嶇┖闂� */
foo(); // 瑙ｆ瀽涓� Foo\Bar\foo resolves to function Foo\Bar\foo
foo::staticmethod(); // 瑙ｆ瀽涓虹被 Foo\Bar\foo鐨勯潤鎬佹柟娉晄taticmethod銆俽esolves to class Foo\Bar\foo, method staticmethod
echo FOO; // resolves to constant Foo\Bar\FOO

/* 闄愬畾鍚嶇О锛屽墠闈㈡病鏈� \鐩稿涓庡綋鍓嶇殑鍛藉悕绌洪棿*/
subnamespace\foo(); // 瑙ｆ瀽涓哄嚱鏁� Foo\Bar\subnamespace\foo
subnamespace\foo::staticmethod(); // 瑙ｆ瀽涓虹被 Foo\Bar\subnamespace\foo,
// 浠ュ強绫荤殑鏂规硶 staticmethod
echo subnamespace\FOO; // 瑙ｆ瀽涓哄父閲� Foo\Bar\subnamespace\FOO

/* 瀹屽叏闄愬畾鍚嶇О锛岀粷瀵圭殑鍛藉悕绌洪棿 */
\Foo\Bar\foo(); // 瑙ｆ瀽涓哄嚱鏁� Foo\Bar\foo
\Foo\Bar\foo::staticmethod(); // 瑙ｆ瀽涓虹被 Foo\Bar\foo, 浠ュ強绫荤殑鏂规硶 staticmethod
echo \Foo\Bar\FOO; // 瑙ｆ瀽涓哄父閲� Foo\Bar\FOO

echo \strlen("hello php");//鍏ㄥ眬闄愬畾鍚嶏紝璋冪敤鍏叡绌洪棿涓嬬殑鍑芥暟锛屽惁鍒欎細琚璁や负璋冪敤褰撳墠绌洪棿涓嬬殑strlen鍑芥暟,瀵逛簬鍑芥暟鍜屽父閲忔潵璇达紝濡傛灉鍦ㄥ綋鍓嶅懡鍚嶇┖闂翠笅闈㈡壘涓嶅埌锛屼細鑷姩鍒板叕鍏辩┖闂存壘锛岀被灏变笉浼氫簡锛屼細鍙戠敓鑷村懡閿欒锛屾彁绀烘壘涓嶅埌杩欎釜绫�
?>
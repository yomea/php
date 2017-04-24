<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>

<?php
//澹版槑鍙橀噺a
/*
 * php 灞炰簬寮辫瑷�绫诲瀷鐨勮剼鏈瑷�
 * 涓嶅繀鏄剧ず鐨勫０鏄庝粬鐨勭被鍨�
 * 鍙橀噺鐨勪綔鐢ㄥ煙
 * local
 * global
 * static
 * parameter
 *
 * 鍦ㄦ墍鏈夊嚱鏁板閮ㄥ畾涔夌殑鍙橀噺锛屾嫢鏈夊叏灞�浣滅敤鍩熴��
 * 闄や簡鍑芥暟澶栵紝鍏ㄥ眬鍙橀噺鍙互琚剼鏈腑鐨勪换浣曢儴鍒嗚闂紝
 * 瑕佸湪涓�涓嚱鏁颁腑璁块棶涓�涓叏灞�鍙橀噺锛岄渶瑕佷娇鐢� global 鍏抽敭瀛椼��
 */

 $a = 10;

function phptest($x, $y) {
	
	//PHP 灏嗘墍鏈夊叏灞�鍙橀噺瀛樺偍鍦ㄤ竴涓悕涓� $GLOBALS[index] 鐨勬暟缁勪腑
	
	global $a;//瀵逛簬鍦ㄥ嚱鏁板闈㈠０鏄庣殑鍏ㄥ眬鍙橀噺鍦ㄥ嚱鏁板唴閮ㄥ繀椤诲０鏄庝负global鐨勶紝鍚﹀垯鎶ラ敊
	
	echo $GLOBALS['a'];
	
	echo "<br />";
	
	echo $a + $x + $y;
	
	static $staticVar = 0;//闈欐�佸彉閲忥紝杩欎釜闈欐�佸彉閲忓拰c璇█涓竴鏍凤紝鍦ㄥ嚱鏁伴��鍑哄悗涓嶄細娑堝け锛屼笅娆¤皟鐢ㄦ椂浼氫繚瀛樹笂娆＄殑鍊�
	
	$staticVar++;
	
	echo $staticVar;
	
}

phptest(10, 10);

?>

</body>
</html>

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
//echo 鐨勯�熷害瑕佹瘮print鐨勫揩锛宲rint鏈夎繑鍥炲�笺��
//闃叉涔辩爜鐨勭幇璞�
header("Content-Type: text/html;charset=utf-8");

echo("鍏跺疄echo涔熸槸涓�涓嚱鏁帮紝鍙互鍔犳嫭鍙风殑");

 echo "hello","world";
 
 print("yes<br />");
 
 

$txt1="瀛︿範 PHP";
$txt2="RUNOOB.COM";
//澹版槑涓�涓暟缁�
$cars=array("Volvo","BMW","Toyota");

echo $txt1;
echo "<br>";
echo "鍦�$txt2瀛︿範 PHP ";//鍙互鐩存帴鍦ㄥ瓧绗︿覆涓啓鍙橀噺锛屾槸涓嶆槸寰堢濂�
echo "<br>";
echo "鎴戣溅鐨勫搧鐗屾槸 {$cars[0]}";


print "浣犲ソ锛屾垜鏄痯rint鍑芥暟锛屾垜璺焑cho鏄竴鏍风殑鐢ㄦ硶锛屽彧涓嶈繃鎴戠殑閫熷害姣斾粬鎱竴鐐癸紝鎴戞湁杩斿洖鍊�"

?>

</body>
</html>

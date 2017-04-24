<?php
$int = 122;
$min = 1;
$max = 200;
//判断这个$int值是否在1到200之间。
if (filter_var($int, FILTER_VALIDATE_INT, array("options" => array("min_range"=>$min, "max_range"=>$max))) === false) {
    echo("变量值不在合法范围内");
} else {
    echo("变量值在合法范围内");
}
?>
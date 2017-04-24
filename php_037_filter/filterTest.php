<?php
/**
 * 更多的过滤器
 * Enter description here ...
 * @var unknown_type
 */
$int = 123;

if(!filter_var($int, FILTER_VALIDATE_INT))
{
	echo("不是一个合法的整数");
}
else
{
	echo("是个合法的整数");
}



$var=300;
 
$int_options = array(
    "options"=>array
    (
        "min_range"=>0,
        "max_range"=>256
    )
);
 
if(!filter_var($var, FILTER_VALIDATE_INT, $int_options))
{
    echo("不是一个合法的整数");
}
else
{
    echo("是个合法的整数");
}

/**
 * 验证email参数是否输入
 */
if(!filter_has_var(INPUT_GET, "email"))
{
    echo("没有 email 参数");
}
else
{	//验证输入的参数是否是email
    if (!filter_input(INPUT_GET, "email", FILTER_VALIDATE_EMAIL))
    {
        echo "不是一个合法的 E-Mail";
    }
    else
    {
        echo "是一个合法的 E-Mail";
    }
}

?>
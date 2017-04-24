<?php

/**
 * 事件驱动方式解析xml
 */

//Initialize the XML parser
$parser=xml_parser_create();

//Function to use at the start of an element
function start($parser,$element_name,$element_attrs)
{
switch($element_name)
{
case "NOTE":
echo "-- Note --<br>";
break;
case "TO":
echo "To: ";
break;
case "FROM":
echo "From: ";
break;
case "HEADING":
echo "Heading: ";
break;
case "BODY":
echo "Message: ";
}
}

//Function to use at the end of an element
function stop($parser,$element_name)
{
echo "<br>";
}

//Function to use when finding character data
function char($parser,$data)
{
echo $data;
}

//Specify element handler 指定标签开始的处理方法
xml_set_element_handler($parser,"start","stop");

//Specify data handler 指定标签内容的处理方法
xml_set_character_data_handler($parser,"char");

//Open XML file 打开xml文件
$fp=fopen("test.xml","r");

//Read data 读取数据，第二个参数是指定读取的长度
while ($data=fread($fp,4096))
{
//int 1 on success or 0 on failure
xml_parse($parser,$data,feof($fp)) or 
die (sprintf("XML Error: %s at line %d", 
xml_error_string(xml_get_error_code($parser)),
xml_get_current_line_number($parser)));
}

//Free the XML parser 释放内存
xml_parser_free($parser);
?>
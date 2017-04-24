<?php
/**
 * 通过DOM的方式解析xml
 * Enter description here ...
 * @var unknown_type
 */
$doc = new DOMDocument();

$doc->load("test.xml");


print $doc->saveXML();


$docList = $doc->documentElement->childNodes;


foreach ($docList as $item) {
	
	print $item->nodeName . " = " . $item->nodeValue . "<br>";
	
}





?>
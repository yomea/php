<?php
$xml=simplexml_load_file("test.xml");
echo $xml->to . "<br>";
echo $xml->from . "<br>";
echo $xml->heading . "<br>";
echo $xml->body;



foreach($xml->children() as $child)
{
    echo $child->getName() . ": " . $child . "<br>";
}

?>
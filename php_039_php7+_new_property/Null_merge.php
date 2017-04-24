<?php
	
	//history
	$name = isset($_GET['name']) ? $_GET["name"] : null;
	
	//php7+
	
	//$name = $_GET['name'] ?? null;//这个意思就是，如果name存在，那个就执行左边的$_GET['name']，否则就执行右边的null。

	$name = isset($_GET['name']) ? $_GET["name"] : isset($_POST['name']) ? $_POST['name'] : null;
	//$name = $_GET['name'] ?? $_POST['name'] ?? null; 
	
?>
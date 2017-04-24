<?php session_start();?>

<?php
//删除session

	unset($_SESSION["view"]);//删除session中的view属性
	
	session_destroy();//重置session，它将删除session中所有的属性

?>
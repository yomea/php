<?php session_start();?>

<?php
	
	//session_start()必须在html标签前面。
	
	$_SESSION['view'] = 1;//设置session

	echo "set session";
	

?>
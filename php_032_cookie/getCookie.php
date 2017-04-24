<?php
	$cookie = isset($_COOKIE['user'])?$_COOKIE['user']:null;
	
	if($cookie) {
		
		echo "hello  ".$cookie;
		
	} else {
		
		
		echo "login...";
		
	}
	

?>
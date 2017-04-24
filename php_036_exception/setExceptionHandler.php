<?php

	function MyException($exception) {
		
		echo "Error:".$exception->getMessage();
		
		
		
	}
	
	
	set_exception_handler("MyException");//注意命名空间
	
	
	throw new Exception("hello, there hava some exception ourcc");


?>
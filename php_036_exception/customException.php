<?php
/**
 * 自定义异常类,捕捉异常和java的非常的相似
 * Enter description here ...
 * @author Administrator
 *
 */


//set_exception_handler("exceptionHandler");

class MyException extends Exception {
	
	public function __construct($message) {
		
		parent::__construct($message);
		
	}
	
	//析构函数
	public function __destruct(){
		
		
	}
	
	
	


}

try{

	if(!isset($_GET['pageNum'])) {
		
		throw new MyException("请输入页码");
	}
} catch (Exception $e) {
	
	echo $e->getMessage()."出错的行号：".$e->getLine();
}



?>

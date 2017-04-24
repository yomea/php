<?php
/**
 * 匿名类的定义 
 */

interface Logger{
	
	public function log();
	
}


class LoggerFactory {
	
	public function getLogger($logger) {
		
		
		return $logger;
	}
	
	
}


$loggerFactory = new LoggerFactory();

//匿名类的对象实例通过new class来创建
//$logger = $loggerFactory->getLogger(new class implements Logger {
//	
//	public function log(){
//		
//		echo "print log";
//		
//	}
//	
//});

$logger->log();

?>
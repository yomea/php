<?php
	//setcookie() 函数必须位于 <html> 标签之前。
	//setcookie(name, value, expire, path, domain); 
	namespace com\cookie;
	//设置cookie在一小时后过期,当前时间加3600秒
	setcookie("user","root",time()+3600);
	
	echo time();
	



?>
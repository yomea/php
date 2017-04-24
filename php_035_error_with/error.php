<?php

	//判断文件师是否存在，如果不存在，那么就终止，并且输出文件不存在的字样给用后
	if(!file_exists("welcome.txt"))
	{
		die("文件不存在");
	}
	else
	{
		$file=fopen("welcome.txt","r");
	}



?>

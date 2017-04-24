

<?php
//将cookie的过期时间调成过去的时间，就可以把它删除了
	setcookie("user","", time()-3600);

?>
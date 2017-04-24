<!DOCTYPE html>
<html>
<body>

<h1>My first PHP page</h1>


<?php

/*
 * while
 * do...while
 * for
 * foreach
 */
header("Content-Type: text/html;charset=utf-8");

$i=1;
while($i<=5)
{
	echo "The number is " . $i . "<br>";
	$i++;
}

$x=array("one","two","three");
foreach ($x as $value)
{
	echo $value . "<br>";
}

?>

</body>
</html>

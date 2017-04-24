<?php 
print(random_int(100, 999)); 
print(PHP_EOL); 
print(random_int(-1000, 0)); 


$bytes = random_bytes(5); 
print(bin2hex($bytes));
?>
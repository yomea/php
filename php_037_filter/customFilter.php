<?php
	function customFilter($subject){
		
		
		return str_replace("_", ".", $subject);
		
	}
	
	
	$subject = "______";
	
	
	echo filter_var($subject, FILTER_CALLBACK, array("options"=>"customFilter"));
	

?>
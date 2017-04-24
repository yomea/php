<?php
namespace A\B;


class Article{

	var $title;

	var $autor;


	function __construct($title, $autor){
			
		$this->title = $title;
		$this->autor = $autor;
		//echo __METHOD__;
			
	}

	function getTitle() {
			
			
		return $this->title;
	}

	function getAutor() {
			
			
		return $this->autor;
	}


	function getMessage() {
			
		return "鏍囬鏄細".$this->title."浣滆�呮槸锛�".$this->autor;
	}



}



?>
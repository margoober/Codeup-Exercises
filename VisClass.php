<?php

class VisClass {

	private $filename;

	function __construct($input) {
		$this->filename = $input;
	}

	//ensure that $filename is a string
	public function confirmString(){
		settype($this->filename, 'string');
	}


	function outputFilename() {
		return $this->filename;
	}
}
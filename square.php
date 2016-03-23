<?php
require_once 'rectangle.php';

class Square extends Rectangle
{
	protected $data = [];

	protected $shape = 'square';

	public function __construct($side) {
		parent::__construct($side, $side);
	}

	public function squarea() {
		return $this->area();
	}


	//__set() and __get()
	public function __set($name, $value) {
		$this->data[$name] = $value;
	}

	public function __get($name) {
		return $this->data[$name];
	}

}

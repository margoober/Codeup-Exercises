<?php
require_once 'rectangle.php';
class Square extends Rectangle
{
	protected $shape = 'square';

	public function __construct($side) {
		parent::__construct($side, $side);
	}

	public function squarea() {
		return $this->area();
	}

}

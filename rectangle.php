<?php
class Rectangle
{
	private $length;
	private $width;

	public function __construct($length, $width) {
		$this->length = $length;
		$this->width = $width;
	}

	public function area() {
		return ($this->length * $this->width);
	}

	public function perimeter () {
			return ($this->length * 2) + ($this->width * 2);
		}

	public function displaySides() {
		return $this->length . " by " . $this->width;
	}

	public function lengthGetter() {
		return $this->length;
	}

}
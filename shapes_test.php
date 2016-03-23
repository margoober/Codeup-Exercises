<?php
require_once 'rectangle.php';
require_once 'square.php';

$rect1 = new Rectangle(2, 60);

echo $rect1->area() . PHP_EOL;

$square1 = new Square(7);

echo "This square's perimeter is " . $square1->perimeter() . PHP_EOL;

echo "This square's area is " . $square1->area() . PHP_EOL;

$rect5 = new Rectangle(6, 100);

echo "This new long rectangle is has a area of: " . $rect5->area() . PHP_EOL;

$square2 = new Square(90);

echo "New square with a area of: " . $square2->area() . PHP_EOL;

echo $rect5->displaySides() . PHP_EOL;
echo $square2->displaySides() . PHP_EOL;

echo $square2->squarea() . PHP_EOL;


echo "Result of getter function lengthGetter(): " . $rect1->lengthGetter() . PHP_EOL;
echo PHP_EOL . "___MAGIC METHODS_____________________________________________" . PHP_EOL . PHP_EOL;

$magicSquare = new Square(10);
$magicSquare->dingaling = 'dorp';
var_dump($magicSquare);

echo PHP_EOL . "___GET()_____________________________________________" . PHP_EOL . PHP_EOL;
















echo $magicSquare->dingaling . PHP_EOL;

var_dump($magicSquare->dingaling);
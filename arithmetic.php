<?php

function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
	return $a - $b;
}

function multiply($a, $b)
{
	return $a * $b;
}

function divide($a, $b)
{
	return $a / $b;
}

function mod($a, $b) {
	return($a % $b);
}
echo add(2, 3) . PHP_EOL;
echo subtract(2, 3) . PHP_EOL;
echo multiply(2, 3) . PHP_EOL;
echo divide(2, 3) . PHP_EOL;
echo mod(21, 3) . PHP_EOL;
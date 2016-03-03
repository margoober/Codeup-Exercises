<?php

function add($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo "{$a} plus {$b} is ";
    	return $a + $b;
	} else {
		throwErrorMessage($a, $b);
	}
}

function subtract($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo "{$a} minus {$b} is ";
    	return $a - $b;
	} else {
		throwErrorMessage($a, $b);
	}
}
function multiply($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo "{$a} times {$b} is ";
    	return $a * $b;
	} else {
		throwErrorMessage($a, $b);
	}
}
#note: switch the is_numeric check and the is_zero check in order to avoid PHP registering non-number data inputs as 0, and then echoing "Cant devide by zeorr" (switch === to ==)
function divide($a, $b) {
	if ($b === 0) {
		echo "Cant devide by zeorr";
	} else if (is_numeric($a) && is_numeric($b)) {
		echo "{$a} divided by {$b} is ";
		return $a / $b;
	} else {
		throwErrorMessage($a, $b);
	}
}

function mod($a, $b) {
	if (is_numeric($a) && is_numeric($b)) {
		echo "{$a} mod {$b} is ";
    	return $a % $b;
	} else {
		throwErrorMessage($a, $b);
	}
}
function throwErrorMessage($a, $b) {
	echo "ERROR: BOth arguments gotta b nubmers, and either {$a} or {$b} isnt\n";
}
echo add(1, 3) . PHP_EOL;
echo subtract(2, 3) . PHP_EOL;
echo multiply(2, 5) . PHP_EOL;
echo divide(2, "b") . PHP_EOL;
echo mod(21, 3) . PHP_EOL;
=======
function add($a, $b)
{
    return $a + $b;
}

function subtract($a, $b)
{
    // Add code here
}

function multiply($a, $b)
{
    // Add code here
}

function divide($a, $b)
{
    // Add code here
}

// Add code to test your functions here

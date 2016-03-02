<?php
//inspect() function here
function inspect($parameter) {
	$type = gettype($parameter);
	if (is_null($parameter)) {
		return "The value is NOLE" . PHP_EOL;
	} else if (is_bool($parameter)) {
		if ($parameter == 1) {
			$parameter = "true";
		} else {
			$parameter = "false";
		}
		return "It's a {$parameter} boolah!" . PHP_EOL;
	} else if (is_string($parameter) && $parameter == "") {
		return "It's a empy strang!" . PHP_EOL;
	} else {
	if (is_array($parameter)) {
		$parameter = serialize($parameter);
	} 
	return "Inspecting {$parameter}:" . PHP_EOL;
	print_r("The type of \"{$parameter}\" is {$type}" . PHP_EOL);
	}
}
//variables!
$string1 = "I'm am a smartre"; //0
$string2 = ''; //1
$array1 = []; //2
$array2 = [1, 2, 3]; //3
$bool1 = true; //4
$bool2 = false; //5
$num1 = 0; //6
$num2 = 0.0; //7
$num3 = 12; //8
$num4 = 14.4; //9
$null = NULL; //10
//array of all:
$data = array($string1, $string2, $array1, $array2, $bool1, $bool2, $num1, $num2, $num3, $num4, $null);
//foreach
foreach ($data as $key => $datum) {
	echo "Key {$key}: ";
	inspect($datum);
}

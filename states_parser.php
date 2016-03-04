<?php
//read the csv file
//write each state's abbrev as a key and the name as a value
//set filename
$filename = "states.csv";
//open file, "r" means read only
$handle = fopen($filename, 'r');
//read contents from the handle to the end of file
$contentString = fread($handle, filesize($filename));
$contentString = trim($contentString); // clears any extra space
fclose($handle);
//convert single string into array of strings
$arrayOfStrings = explode(PHP_EOL, $contentString);
foreach ($arrayOfStrings as $string) {
	$stateAssociativeArray = [];
	$stateInfo = explode(",", $string);
	//stateInfo[0] is the abbreviation as string
	//stateInfo[1] is the state name as string
	$abbreviation = $stateInfo[0];
	$stateName = $stateInfo[1];
	$stateAssociativeArray[$abbreviation] = $stateName;
	$arrayOfStates[] = $stateAssociativeArray;
}
	print_r($arrayOfStates);


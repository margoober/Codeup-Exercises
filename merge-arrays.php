<?php

$names = ['Todles', 'Dantan', 'Mike', 'Amp Tamp', 'Ad Tab Taddles'];

$compare = ['Todles', 'Dibbledip', 'Mel', 'Amp Tamp', 'Mimps Dimple Dump'];

//return true or false depending on if $value is in $array

function isInArray($value, $array) {
    if (array_search($value, $array) !== false) {
        return true;
    } else {
        return false;
    }
}
var_dump(isInArray("Todles", $names));

//return the number of elements $array1 and $array2 have in common
function compareArrays($array1, $array2) {
    $counter = 0;
    foreach ($array1 as $name) {
        if (array_search($name, $array2) !== false) {
            $counter++;
        }
    }
    return $counter;
}
echo "The arrays have " . compareArrays($names, $compare) . " names in common" . PHP_EOL;
echo isInArray("Ad Tab Taddles", $names) ? "Ad Tab Taddles IS in the arrray!\n" : "Ad Tab Taddles is NOT in the array.\n";
echo isInArray("Dibbledip", $compare) ? "Dibbledip is in the HOUSE\n" : "Dibbledip has left the bulding\n";
echo "___________" . PHP_EOL;
//combine arrays function

function combine_arrays($array1, $array2) {
    $combinedArray = [];
    foreach ($array1 as $key => $name) {
        if ($array1[$key] != $array2[$key]) {
            $combinedArray[] = $array1[$key];
            $combinedArray[] = $array2[$key];
        } else {
            $combinedArray[] = $array1[$key];
        }
    }
    return $combinedArray;
}
combine_arrays($names, $compare);
$result = combine_arrays($names, $compare);
var_dump($result);






























<?php

$names = ['Todles', 'Dantan', 'Mike', 'Amp Tamp', 'Ad Tab Taddles', 'Hell Head', 'Marsha', 'Marp Tarp', 'Lota'];

$compare = ['Todles', 'Dibbledip', 'Mel', 'Amp Tamp', 'Mimps Dimple Dump'];

function combine_arrays_of_different_sizes($array1, $array2) {
    while (count($array1) > count($array2)) {
        $array2[] = array_push($array2, "0");
    }
    while (count($array1) < count($array2)) {
        $array2[] = array_push($array2, "0");
    }
    if (count($array2) == count($array1)) {
        $combinedArray = [];
        foreach ($array1 as $key => $name) {
            if ($array1[$key] != $array2[$key]) {
                if (!is_numeric($array1[$key])) {
                    $combinedArray[] = $array1[$key];
                }
                if (!is_numeric($array2[$key])) {
                    $combinedArray[] = $array2[$key];
                }
            } else {
                if (!is_numeric($array2[$key])) {
                    $combinedArray[] = $array1[$key];
                }
            }
        }
        return $combinedArray;
    }
}
combine_arrays_of_different_sizes($names, $compare);
$result = combine_arrays_of_different_sizes($names, $compare);
var_dump($result);
<?php

$array = [
    'Sump Mumpcon Styssens' => [
        'Vine Kirkman',
        'Bilb Jobbo',
        'Ando Bestoffriends',
        'Scoth Macanons'
    ],
    'Sliptip Grimpsticks' => [
        'Jump Clump Clark',
        'Ed Ped McClark Dark Park'
    ],
    'Cramps' => [
        'Will Nill Nor Por',
        'Simbles Crimbles'
    ],
    'Neps Peps' => [
        'Ston Jon Tobs',
        'Avril T\'vine',
        'Jobble Hoffle Munts',
        'Bub Trubble Bubble',
        'Sussen Karuse Bruiser'
    ],
    'Acorn Dorn' => [
        'Stob Furber Clurb Bum',
        'Sop Wopple Wilson',
        'Himper Hauser Hiss',
        'Jitch Stich Mitchle'
    ],
    'Mr. Mip\'s Tocologiss' => [
        'Skipple Strittle Sitter',
        'Juck Luck Hentown'
    ],
    'Comdodo' => [
        'Yash Terakura',
        'Bobe Ramsam Dipples',
        'Bobe Yantis',
        'David A. Ziembicki',
        'Jay Mints Tintles'
    ],
    'Binc' => [
        'Stens Sack Mackleman',
        'Jan-Lob Grasshop Top'
    ]
];
foreach ($array as $companyName => $arrayOfPeople) {
    sort($arrayOfPeople);
    $array[$companyName] = $arrayOfPeople;
}
ksort($array);
arsort($array);
print_r($array);


$languages = ["html", "css", "helltongue"];
foreach($languages as $key => $language) {
    $languages[$key] = strtoupper($language);
}
var_dump($languages);

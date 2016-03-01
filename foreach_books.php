<?PHP
$books = array(
    'The Hob Bob Knub' => array(
        'publication year' => 1937,
        'author' => 'Jr. Togler',
        'pages' => 310,
        'subject' => 'of a truly short protagonist and his wizardly master'
    ),
    'Games and Toes' => array(
        'publication year' => 1996,
        'author' => 'George Roro Morntoño',
        'pages' => 835,
        'subject' => 'of a truly adventurous goblin friend club'
    ),
    'The Catcher\'s Rye Eye' => array(
        'publication year' => 1951,
        'author' => 'J. Dingalinger',
        'pages' => 220,
        'subject' => 'of a truly misunderstood teen angstboy'
    ),
    'The Two Cities Tale' => array(
        'publication year' => 1859,
        'author' => 'Carlo Darlo Dickles',
        'page count' => 544,
        'subject' => 'of a truly compelling city-vs.-city comparison tale'
    ),
    'Sounds Furious' => array(
        'publication year' => 1929,
        'author' => 'Wilner Farl Karps',
        'page count' => 340,
        'subject' => 'of a truly southern matter of downfalls'
    ),
    'Moble\'s Doble\'s Dick' => array(
        'publication year' => 1851,
        'author' => 'Merman Hell Velman',
        'page count' => 940,
        'subject' => 'of a whale of a tale, from my boat to yours'
    )
);
echo "Books written before 1950: " . PHP_EOL . PHP_EOL;
foreach ($books as $key => $book) {
	if ($books[$key]["publication year"] <= "1950") {
		echo "{$key}:" . PHP_EOL;
		foreach ($book as $key => $value) {
			echo "This book's {$key} is {$value}" . PHP_EOL;
		}
		echo PHP_EOL;
	}
}
echo "Books written after 1950: " . PHP_EOL . PHP_EOL;
foreach ($books as $key => $book) {
	if ($books[$key]["publication year"] > "1950") {
		echo "{$key}:" . PHP_EOL;
		foreach ($book as $key => $value) {
			echo "This book's {$key} is {$value}" . PHP_EOL;
		}
		echo PHP_EOL;
	}
}
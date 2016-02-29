<?PHP
for ($i = 1; $i <= 100; $i ++) {
	if (($i % 3 == 0) && ($i % 5 == 0)) {
		echo "{$i} Razzle Dazzle" . PHP_EOL;
	} else if ($i % 3 == 0) {
		echo "{$i} Razzle" . PHP_EOL;
	} else if ($i % 5 == 0) {
		echo "{$i} Dazzle" . PHP_EOL;
	} else {
		echo "{$i}" . PHP_EOL;
	}
}
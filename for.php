<?PHP

function game() {
	$a = 1;
	fwrite(STDOUT, 'Enter an starting nubmer! ');
	$i = trim(fgets(STDIN));
	fwrite(STDOUT, 'Enter a ending nubmer! ');
	$e = trim(fgets(STDIN));
	fwrite(STDOUT, 'And an interval! ');
	$a = trim(fgets(STDIN));
	var_dump(is_numeric($a));
	if ((is_numeric($i)) && (is_numeric($e)) && (is_numeric($e))) {
		for ($i; $i <= $e; $i += $a) {
			echo "{$i} is here!" . PHP_EOL;
		}
	} else {
		echo "nope!" . PHP_EOL;
	}
}
do {
game();
} while ($a);
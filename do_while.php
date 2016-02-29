<?PHP

$a = 0;
do {
	echo "{$a}\n";
	$a += 2;
} while ($a <= 100);

$b = 2;
do {
	echo "{$b}\n";
	$b *= $b;
} while ($b < 100000);
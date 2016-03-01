<?PHP
for ($i = 1; $i <= 40; $i++){
	if ($i % 6 != 0) {
		continue;
	}
	echo "{$i} is div by 6!" . PHP_EOL;
}
for ($i = 1; $i <= 100; $i++) {
	echo $i . PHP_EOL;
	if ($i == 3) {
		break;
	}
}
echo "_______________" . PHP_EOL;
$numbers = array(1, 2, 3, 4, 5);
// Loop 1
foreach ($numbers as $key => $value) {
    echo "{$value}\n";
    // Loop 2
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 2) {
            echo "{$i}\n";
            break 2;
        }
    }
}
echo "done!\n";
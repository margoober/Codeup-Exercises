<?PHP
$physicistsString = 'Forton Fortgourd, Mart Carter, Shorpon Dorp Turd, Qual Pallory, Bus Bunner, Rolo Tony Brown Town';
$physicistsArray = explode(', ', $physicistsString);
function humanizeList($list, $alpha = false) {
	if ($alpha == true) {
		sort($list);
	}
	$alphaList = $list;
	$last = "& " . array_pop($alphaList);
	$alphaList[] = $last;
	return implode(', ', $alphaList);
}
$result = humanizeList($physicistsArray, 1);
echo "I know some beanbrained sciencetists called {$result}." . PHP_EOL;
<?php
$languages = ["Cantonese", "English", "Russian", "Karelian", "Estonian", "Hungarian", "Breadhead", "Basque", "Mandarin", "Icelandic", array(
	"Dung Tongue", "Wopple", "Tordic", "Less Less Mess", "Spaun Maun"
	), "Montondo"];
foreach ($languages as $language) {
	var_dump($language) . PHP_EOL;
}
$mishMash = ["Heck", "Snapos", 2, true, 3.444, null, "My beans your beans", 0, "300", array("Sad", "Despondent", "Pit")];

foreach ($mishMash as $item) {
	echo "{$item} is a(n) " . gettype($item) . PHP_EOL;
	if (gettype($item) == "array") {
		foreach ($item as $subItem) {
			var_dump($subItem);
			echo "  -{$subItem}" . PHP_EOL;
		};
	}
}
foreach ($mishMash as $item) {
	if (is_scalar($item) == "1") {
		echo "{$item} is scalar" . PHP_EOL;
	} else {
		echo "{$item} is NOT scalar" . PHP_EOL;
	}
}
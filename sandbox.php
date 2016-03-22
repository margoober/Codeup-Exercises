<?PHP
function logMessage($logLevel, $message) {
	$filename = "newlog-" . date("d-m-Y") . ".log";
	$handle = fopen($filename, 'a');
	$string = date("d-m-Y") . " " . date("H:i:s") . " " . $logLevel . " " . $message . PHP_EOL;
	fwrite($handle, $string);
	fclose($handle);
}
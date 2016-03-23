<?php

function logMessage($logLevel, $message) {
    // todo - complete this function
    //log to file
    $filename = "newlog-" . date("d-m-Y") . ".log";

    $handle = fopen($filename, 'a');

    $string = date("d-m-Y") . " " . date("H:i:s") . " " . $logLevel . " " . $message . PHP_EOL; 

    fwrite($handle, $string);

    fclose($handle);
}

function logInfo($message = "This is an info message!"){
	logMessage("INFO", $message);
}
function logError($message = "This is an error message!"){
	logMessage("ERROR", $message);
}
logInfo();
logError();
echo "logger logged!" . PHP_EOL;
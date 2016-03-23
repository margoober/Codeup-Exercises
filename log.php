<?PHP

class Log {

	public $filename;

	function logMessage($logLevel, $message) {
		$date = date('y-m-d');
		$filename = $prefix . $date . ".log";
		$handle = fopen($filename, a);
	}

	function info (){
	}

	function error(){
		
	}

}
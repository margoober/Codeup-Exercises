<?PHP

class Log {

	private $filename;
	private $handle;
	private $date;

	//construct function\

	public function __construct($prefix = 'log'){
		$this->date = date('Y-m-d');
		$this->filename = $prefix . '-' . $this->date . '.log';
		if (is_writeable($this->filename)) {
			$this->handle = fopen($this->filename, 'a');	
		}
	}

	private function setFilename($filename){
		if (! is_string($filename)) {
			echo 'The property $filename needs to be a string. You gave ' . gettype($filename) . PHP_EOL;
			die();
		}
	}

	public function logMessage($logLevel, $message) {
		$time = date('H:i:s');
		$date = date('y-m-d');
		$filename = $prefix . $date . ".log";
		$handle = fopen($filename, a);
	}

	function logInfo (){
	}

	function logError(){
		
	}

}
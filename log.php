<?PHP
class Log
{
	public $filename;

	public function __construct($prefix = 'log-') {
		$this->date
	}

	function logMessage()
	{
		$date = date('y-m-d');
		$filename = $prefix . $date . ".log";
		$handle = fopen($filename, a);

	}
	function info() {

	}
	function error() {

	}
}
$test = new Log();
$test->filename = "logger.php";
print_r($test);
?>
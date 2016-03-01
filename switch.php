<?PHP
// Set the default timezone
date_default_timezone_set('America/Chicago');

$dayOfWeek = date('D');
switch($dayOfWeek) {
 	case "Mon":
        echo "It's Monday!" . PHP_EOL;
 		break;
 	case "Tue":
 		echo "It's Tuesday!" . PHP_EOL;
 		break;
 	case "Wed":
		echo "It's Wednesday!" . PHP_EOL;
 		break;
 	case "Thu":
		echo "It's Thursday!" . PHP_EOL;
 		break;
 	case "Fri":
 		echo "It's Friday!" . PHP_EOL;
 		break;
 	case "Sat":
 		echo "It's Saturday!" . PHP_EOL;
 		break;
 	case "Sun":
 		echo "It's Sunday!" . PHP_EOL;
 		break;
 	default:
 		echo "That's not a day!" . PHP_EOL;
 		break;
}
$dayOfMonth = date('j');
$ordinal = date("S");
$leap = date('L');
echo "It's the {$dayOfMonth}{$ordinal} day of the month!" . PHP_EOL;
switch($leap) {
 	case 1:
        echo "It's a LEAP YEAR!" . PHP_EOL;
 		break;
 	default:
 		echo "It's not a leap year!" . PHP_EOL;
 		break;
 }
<?php

//MVC -- Model View Controller
/*
variables abstract value and name
loops abstract repetition

function abstract processes

objects abstract state and behavior
model abstracts data and behavior w/ db table
- CRUD operations Create, Read, Update, Delete
- Define relationships w/ other models
- How we represent db tables in our application
*/

class Model
{
	private $attributes = [];
	private $species;
	protected static $table;

	public function __set($key, $value){
		$this->attributes[$key] = $value;
	}

	public function __get($key) {
		if (array_key_exists($key, $this->attributes)) {

			return $this->attributes[$key];

		} else {

			return null;

		}
	}

	//add a static method named getTableName() that returns the value of the static property $table;
	public static function getTableName() {
		return static::$table;
	}
}

//testing it out!
/*
$person = new Model;

$person->species = "humbean";
echo '$person->species is: ' . $person->species . PHP_EOL;

$person->hatColor = "devils' blue";
echo $person->hatColor . PHP_EOL;

$person->biggestRegret = "being bornt";
echo $person->biggestRegret . PHP_EOL;

$person->favoriteFinger = "devil's finger";
echo $person->favoriteFinger . PHP_EOL;

echo "___________________" . PHP_EOL;

var_dump($person);
*/



















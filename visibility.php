<?php

require_once 'VisClass.php';
$testVisClass = new VisClass(3);

$testVisClass->confirmString();
var_dump($testVisClass->outputFilename());
<?php
ini_set('display_errors', 1);
error_reporting(E_ALL);
include 'vendor/autoload.php';

$a= new \Dash\tools\church\TestClass1();
var_dump($a);
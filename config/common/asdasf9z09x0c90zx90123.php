<?php
date_default_timezone_set('Asia/Manila');

// FOR LOCAL SERVER
define("SERVER", "localhost");
define("USERNAME", "root");
define("PASSWORD", "");
define("DATABASE", "drxassessment");

// FOR WEB HOSTING
// define("SERVER", "localhost");
// define("USERNAME", "root");
// define("PASSWORD", "");
// define("DATABASE", "drxassessment");

$connection = new PDO('mysql:host='.SERVER.';dbname='.DATABASE,USERNAME,PASSWORD);
?>

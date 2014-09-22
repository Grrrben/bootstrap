<?php

// hebben we nog extra info nodig?
require_once ('db_settings.php');

// connectie met een database
// @url http://php.net/manual/en/book.mysqli.php
$mysqli = new mysqli("localhost", $username, $password, $dbname);
if ($mysqli->connect_errno) {
	echo 'Er is een database error. De connectie staat in /trunk/inc/setup.php. Je kunt de connectie even uitzetten door de regelsa te commenten met //. <br><br>';
	die ("Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error);	
}
<?php

/***
* File: dbconnect.php
* Author: Georgiadis Polychronis
* Created: 13.1.2020
* Description: connect to database
***/

$host = 'localhost';
$db = 'tictactoe';
$user = 'root';
$pass = '';

if(gethostname()=='users.iee.ihu.gr') {
	$mysqli = new mysqli($host, $user, $pass, $db,null,'/home/student/it/2016/it164648/mysql/run/mysql.sock');
} else {
	$mysqli = new mysqli($host, $user, $pass, $db);
}

if ($mysqli->connect_errno) {
	echo "Failed to connect to MySQL: (" . 
	$mysqli->connect_errno . ") " . $mysqli->connect_error;
}

?>
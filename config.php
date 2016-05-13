<?php
/*
VTS Directory Update Script
Author: Nazmus Nasir
URL: http://nazm.us 
Harvard Business School Information Technology - Learning Management Ecosystem

This script's purpose is to generate the HTML for an internal directory - has no real use outside of this one usecase. 

Config.php - this file contains the local MySQL settings
*/

$server = "localhost"; //server name/url
$username = "root"; //MySQL Username
$password = ""; //MySQL Password 
$db = "f3vts"; // MySQL Database name

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

if(mysqli_connect_errno()){
		echo "DB Connection failed: ". mysqli_connect_error(); //error checking
	} 
?>

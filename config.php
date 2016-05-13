<?php

$server = "localhost"; //server name/url
$username = "root"; //MySQL Username
$password = ""; //MySQL Password 
$db = "f3vts"; // MySQL Database name

// Create connection
$conn = mysqli_connect($server, $username, $password, $db);

if(mysqli_connect_errno()){
		echo "DB Connection failed: ". mysqli_connect_error(); //error checking
	} 


//other conneciton type
//	$select_db = mysqli_select_db($conn,$db);
//	if(!$select_db){
//		echo "DB Selection Failed: ". mysqli_error();
//	}
//else echo "connection successful";
?>
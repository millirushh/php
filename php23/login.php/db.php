<?php 
	$host = "localhost";
	$username = "root";
	$password = "";
	$database = "php23";

	$conn = new mysqli($host, $username, $password, $database);

	if($conn->connect_error){
		die("connection failed");
	}else{
		 
	}
 ?>
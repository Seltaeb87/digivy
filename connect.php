<?php

	//Connect to the DigiVy database
	$username = 'YOUR_USERNAME';
	$password = 'YOUR_PASSWORD';
	$dsn = 'mysql:dbname=YOUR_DBNAME;host=YOUR_HOST';

	try{
		$connect = new PDO($dsn, $username, $password);
	}catch (PDOexception $e){
		echo 'Connection failed: ' . $e->getMessage();
	}

?>

<?php
error_reporting(E_ALL);
ini_set('display_errors', on);

	require 'connect.php';
	/**
	*
	* User Section
	*
	**/

	//Check if a user is logged in
	function loggedIn(){

	}

	//login if a user is not logged in
	function login(){

	}

	//Registration of a new user
	function registerUser(){

	}

	/**
	* 
	* Vinyl Section
	* 
	**/

	function showVinylOwnedByUser(){

	}

	//Get all Vinyl records from the database. For now this is for testing purposes
	function getAllVinyl($connect){
		$stmt = $connect->prepare('SELECT * from vinyl');

		$stmt->execute();

		foreach ($stmt as $row) {
			echo 'Artist: 		' . $row['artist'] . '<br>';
			echo 'Title: 		' . $row['title'] . '<br>';
			echo 'Release Date: ' . $row['release_date'] . '<br>';
			echo 'Recorded At:  ' . $row['recorded_at'] . '<br>';
			echo 'Genre: 		' . $row['genre'] . '<br>';
			echo 'Length:		' . $row['length'] . '<br>';
			echo 'Label: 		' . $row['label'] . '<br>';
			echo 'Producer: 	' . $row['producer'] . '<br>';
		}
	}

?>

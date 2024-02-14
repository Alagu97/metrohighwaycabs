<?php

	$parentDirectory = dirname(__DIR__); // Getting the parent directory
	
	$databaseFilePath = $parentDirectory . '/class/database.php'; // Constructing the path to database.php

	require_once $databaseFilePath; // Now, you can include or require the file

	$database = new Database(); // class name 
	
	$gic_db = $database -> connectToDatabase(); // function calling
	


	
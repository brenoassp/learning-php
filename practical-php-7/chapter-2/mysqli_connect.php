<?php 
	// This file provides the information for accessing the database and connecting to MySQL.
	// First, we define the constants:
	Define ('DB_USER','breno');
	Define ('DB_PASSWORD','');
	Define ('DB_HOST','localhost');
	Define ('DB_NAME','breno');

	// Next we assign the database connection to a variable that we will call $dbcon:
	try {
		$dbcon = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
		mysqli_set_charset($dbcon, 'utf8');
		//more code will go here later
	} catch (Exception $e) { // We finally handle any problems here
		print "The system is busy please try later";
	} catch(Error $e){
		print "The system is busy please try later";
	}
?>
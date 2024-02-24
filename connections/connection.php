<?php
	// connect to database
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "it26";

	

	// check connection
	try{
		// connect to database
		$conn = mysqli_connect($servername, $username, $password, $dbname);
		
	}
	catch(mysqli_sql_exception $e){
		die("Sorry we Failed to connect: ". mysqli_connect_error());

	}
   



?>
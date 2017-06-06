<?php
	// Define MySQL connection data
	$MYSQL['host'] = "localhost";
	$MYSQL['user'] = "anychart_user";
	$MYSQL['password'] = "anychart_pass";
	$MYSQL['database'] = "anychart_db";

	// Connect to MySQL database
	$mysqli = mysqli_connect($MYSQL['host'],$MYSQL['user'],$MYSQL['password'],$MYSQL['database']);

	// Make SQL request
	$result = $mysqli->query("SELECT name, value FROM fruits ORDER BY value DESC LIMIT 5");

	// Loop through the result and populate an array
	$fruits = Array();
    while ($fruits[] = $result->fetch_assoc()){}
    array_pop($fruits);

	// Return the result and close MySQL connection
    $mysqli->close();
    header('Content-type: application/json');

	echo json_encode($fruits);
?>

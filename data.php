<?php
	// Define MySQL connection data
	$MYSQL['host'] = "localhost";
	$MYSQL['user'] = "anychart_user";
	$MYSQL['password'] = "anychart_pass";
	$MYSQL['database'] = "anychart_db";

	// Connect to MySQL database
	$connect = mysql_connect($MYSQL['host'],$MYSQL['user'],$MYSQL['password']);
	mysql_select_db($MYSQL['database'], $connect);
	if (!$connect) {
	    die('Could not connect: ' . mysql_error());
	}	

	// Make SQL request
	$res = mysql_query("SELECT name, value FROM fruits ORDER BY value DESC LIMIT 5", $connect);

	// Loop through the result and populate an array
	$fruits = Array();
	while ($fruit = mysql_fetch_assoc($res)){
		$fruits[] = $fruit;
	}

	// Return the result and close MySQL connection
	mysql_close($connect);
	echo json_encode($fruits);
?>

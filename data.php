<?php
	$MYSQL['host'] = "localhost";
	$MYSQL['user'] = "anychart_user";
	$MYSQL['password'] = "anychart_pass";
	$MYSQL['database'] = "anychart_db";

	$connect = mysql_connect($MYSQL['host'],$MYSQL['user'],$MYSQL['password']);
	mysql_select_db($MYSQL['database'], $connect);

	if (!$connect) {
	    die('Could not connect: ' . mysql_error());
	}	

	$res = mysql_query("SELECT name, value FROM fruits ORDER BY value DESC LIMIT 5", $connect);

	$products = Array();

	// Loop through and populate an array
	while ($product = mysql_fetch_assoc($res)){
		$products[] = $product;
	}

	mysql_close($connect);
	echo json_encode($products);
?>

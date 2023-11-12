<?php
	$Payment_id = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM payment WHERE Payment_id=$Payment_id" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=payment_read.php>READ All Records</a>";
?>
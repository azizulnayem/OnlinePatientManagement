<?php
	$Test_Serial = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM test WHERE Test_Serial=$Test_Serial" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=test_read.php>READ All Records</a>";
?>
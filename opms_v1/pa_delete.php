<?php
	$PA_ID = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM pa WHERE PA_ID=$PA_ID" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=pa_read.php>READ All Records</a>";
?>
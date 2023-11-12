<?php
	$Qua_ID = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM qualifications WHERE Qua_ID=$Qua_ID" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=qualifications_read.php>READ All Records</a>";
?>
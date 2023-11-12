<?php
	$Patient_id = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM patient WHERE Patient_id=$Patient_id" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=patient_read.php>READ All Records</a>";
?>
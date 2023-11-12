<?php
	$Chamber_no = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM chamber WHERE Chamber_no=$Chamber_no" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=chamber_read.php>READ All Records</a>";
?>
<?php
	$Method_Code = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM method WHERE Method_Code=$Method_Code" )
		or die("Can not execute query");

	echo "Record deleted<br>";

	echo "<p><a href=method_read.php>READ All Records</a>";
?>
<?php
	$cd = $_GET["C_Days"];
	$pid = $_GET["Patient_id"];
    $dc = $_GET["Diseases_Code"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO carry VALUES ( '$cd', $pid,$dc)")
		or die("Can not execute query");

	echo "Record inserted:<br> Carrying Days = $cd <br> Patient's ID = $pid <br> Diseases Code = $dc";

	echo "<p><a href=carry_read.php>READ All Records</a>";
?>
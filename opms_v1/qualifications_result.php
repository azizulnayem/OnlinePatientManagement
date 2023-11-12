<?php
	$dql = $_GET["Doc_Q_length"];
	$dd = $_GET["Doc_Degree"];
    $di = $_GET["Doc_Institution"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO qualifications VALUES ('$dql','$dd','$di',NULL,'$did')")
		or die("Can not execute query");

	echo "Record inserted:<br> Qualification Length = $dql <br> Doctor's Degree = $dd <br> Doctor's Institution = $di <br> Doctor's Id = $did";

	echo "<p><a href=qualifications_read.php>READ All Records</a>";
?>
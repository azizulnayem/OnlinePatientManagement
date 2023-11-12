<?php
	$din = $_GET["Diseases_Name"];
    $ds = $_GET["Diseases_Symptom"];
	$docid = $_GET["Doctor_id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO diseases VALUES ('$din', NULL,'$ds',$docid)")
		or die("Can not execute query");

	echo "Record inserted:<br> Diseases Name = $din <br> Diseases Symptom = $ds <br> Doctor's ID = $docid";

	echo "<p><a href=diseases_read.php>READ All Records</a>";
?>
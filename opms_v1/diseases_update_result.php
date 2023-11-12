<?php
	$dn  = $_GET["dn"];
	$id = $_GET["id"];
	$ds = $_GET["ds"];
    $did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE diseases SET Diseases_Name='$dn', Diseases_Symptom='$ds', Doctor_id='$did' WHERE Diseases_Code = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> Diseases Name = $dn <br> Diseases Symptom = $ds <br> Doctor's ID = $did";

	echo "<p><a href=diseases_read.php>READ all records</a>";
?>
<?php
	$dol  = $_GET["dol"];
	$dd = $_GET["dd"];
	$di = $_GET["di"];
    $id = $_GET["id"];
	$did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE qualifications SET Doc_Q_length='$dol', Doc_Degree='$dd', Doc_Institution='$di', Doctor_id='$did' WHERE Qua_ID = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> Qualification Length = $dol <br> Doctor's Degree = $dd <br> Doctor's Institution = $di <br> Doctor's ID = $did";

	echo "<p><a href=qualifications_read.php>READ all records</a>";
?>
<?php
    $tn = $_GET["tn"];
	$r = $_GET["r"];
	$tin = $_GET["tin"];
    $id = $_GET["id"];
	$pid = $_GET["pid"];
	$did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE test SET Test_Name='$tn', Result='$r', Time_Needed='$tin', Patient_id='$pid', Doctor_id='$did' WHERE Test_Serial = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> Test Name = $tn <br> Result = $r <br> Time Needed = $tin <br> Patient's ID = $pid <br> Doctor's ID = $did";

	echo "<p><a href=test_read.php>READ all records</a>";
?>
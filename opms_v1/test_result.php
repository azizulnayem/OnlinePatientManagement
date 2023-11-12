<?php
	$tn = $_GET["Test_Name"];
	$r = $_GET["Result"];
    $tin = $_GET["Time_Needed"];
	$pid = $_GET["Patient_id"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO test VALUES ( '$tn', '$r','$tin',NULL,$pid,$did)")
		or die("Can not execute query");

	echo "Record inserted:<br> Test Name = $tn <br> Result = $r <br> Time_Needed = $tin <br> Patient's ID = $pid <br> Doctor's ID = $did";

	echo "<p><a href=test_read.php>READ All Records</a>";
?>
<?php
	$bg = $_GET["Blood_Group"];
	$qb = $_GET["Quantity_Blood"];
    $nod = $_GET["Number_of_donations"];
	$pid = $_GET["Patient_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO blood VALUES ( '$bg', '$qb',NULL,'$nod',$pid)")
		or die("Can not execute query");

	echo "Record inserted:<br> Blood Group = $bg <br> Quantity Of Blood = $qb <br> Donation No = $nod <br> Patient's ID = $pid";

	echo "<p><a href=blood_read.php>READ All Records</a>";
?>
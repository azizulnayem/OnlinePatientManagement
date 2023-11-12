<?php
	$mp = $_GET["Method_Process"];
	$muf = $_GET["Method_Used_for"];
    $pid = $_GET["Payment_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO method VALUES ( NULL, '$mp', '$muf',$pid)")
		or die("Can not execute query");

	echo "Record inserted:<br> Method Process = $mp <br> Method Used For = $muf <br> Payment's ID = $pid";

	echo "<p><a href=method_read.php>READ All Records</a>";
?>
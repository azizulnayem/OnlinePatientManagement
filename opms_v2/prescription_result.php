<?php
	$di = $_GET["Direction"];
	$m = $_GET["Medicine"];
    $d = $_GET["Dose"];
	$did = $_GET["Doctor_id"];
    $p = $_GET["Patient_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO prescription VALUES ( NULL, '$di','$m','$d',$did,$p)")
		or die("Can not execute query");

	echo "Record inserted:<br> Direction = $di <br> Medicine = $m <br> Dose = $d <br> Doctor's ID = $did <br> Patient's ID = $p";

	echo "<p><a href=prescription_read.php>READ All Records</a>";
?>
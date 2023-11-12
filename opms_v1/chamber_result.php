<?php
	$cr = $_GET["Chamber_Rent"];
	$l = $_GET["location"];
    $at = $_GET["Available_Time"];
	$tn = $_GET["Telephone_no"];
    $did = $_GET["Doctor_id"];
	$pid = $_GET["PA_ID"];
  
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO chamber VALUES ( $cr,NULL, '$l','$at','$tn',$did,$pid)")
		or die("Can not execute query");

	echo "Record inserted:<br> Chamber's Rent = $cr <br> Location = $l <br> Available Time = $at <br> Telephone No = $tn <br> Doctor's ID = $did <br> PA's ID = $pid";

	echo "<p><a href=chamber_read.php>READ All Records</a>";
?>
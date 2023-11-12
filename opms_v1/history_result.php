<?php
	$r = $_GET["Remarks"];
	$vd = $_GET["V_Date"];
    $vm = $_GET["V_Month"];
	$vy = $_GET["V_Year"];
    $pa = $_GET["Patient_id"];
	$pid = $_GET["Payment_id"];
  
	
    require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO history VALUES ( '$r', '$vd','$vm','$vy',NULL,$pa,$pid)")
		or die("Can not execute query");

	echo "Record inserted:<br> Remarks = $r <br> Visiting Date = $vd <br> Visiting Month = $vm <br> Visiting Year = $vy <br> Patient's ID = $pa <br> Payment's ID = $pid";

	echo "<p><a href=history_read.php>READ All Records</a>";
?>
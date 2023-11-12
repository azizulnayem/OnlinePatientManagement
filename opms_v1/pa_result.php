<?php
	$sa = $_GET["Salary"];
	$ep = $_GET["Email_PA"];
    $sn = $_GET["Start_Name"];
	$en = $_GET["End_Name"];
    $pn = $_GET["PA_Number"];
	$st = $_GET["Street"];
    $zc = $_GET["Zip_Code"];
    $c = $_GET["City"];
    $doi = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO pa VALUES ($sa, '$ep','$sn','$en','$pn','$st','$zc','$c',NULL,$doi)")
		or die("Can not execute query");

	echo "Record inserted:<br> Salary = $sa <br> Email PA = $ep <br> Start Name = $sn <br> End Name = $en <br> PA Number = $pn <br> Street = $st <br> Zip Code = $zc <br> City = $c <br> Doctor ID = $doi";

	echo "<p><a href=pa_read.php>READ All Records</a>";
?>
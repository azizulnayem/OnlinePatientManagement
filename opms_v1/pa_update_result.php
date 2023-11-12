<?php
	$s  = $_GET["s"];
	$ep = $_GET["ep"];
	$sn = $_GET["sn"];
    $en = $_GET["en"];
	$pn = $_GET["pn"];
	$st = $_GET["st"];
    $zp= $_GET["zp"];
    $c = $_GET["c"];
    $id= $_GET["id"];
    $did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE pa SET Salary='$s', Email_PA='$ep', Start_Name='$sn', End_Name='$en', PA_Number='$pn' , Street='$st' , Zip_Code='$zp', City='$c', Doctor_id='$did' WHERE PA_ID = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> Salary = $s <br> Email PA = $ep <br> Start Name = $sn <br> End Name = $en <br> PA Number = $pn<br> Street = $st <br> Zip Code = $zp <br> City = $c <br> Doctor ID = $did";

	echo "<p><a href=pa_read.php>READ all records</a>";
?>
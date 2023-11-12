<?php
	$id  = $_GET["id"];
	$fname = $_GET["fname"];
	$mname = $_GET["mname"];
    $lname = $_GET["lname"];
	$age = $_GET["age"];
	$dno = $_GET["dno"];
    $dem = $_GET["dem"];
    $jdate = $_GET["jdate"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE doctor SET First_Name='$fname', Middle_Name='$mname', Last_Name='$lname', Age='$age', Doctor_Number='$dno' , Doctor_Email='$dem' , Joining_Date='$jdate' WHERE Doctor_id = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<p>Record updated:<br> First Name = $fname <br> Middle Name = $mname <br> Last Name = $lname <br> Age = $age <br> Doctor's Number = $dno <br> Doctor's Email = $dem <br> Joining Date = $jdate";

	echo "<p><a href=doctor_read.php>READ all records</a>";
?>
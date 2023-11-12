<?php
	$fn = $_GET["First_Name"];
	$mn = $_GET["Middle_Name"];
    $ln = $_GET["Last_Name"];
	$age = $_GET["Age"];
    $dn = $_GET["Doctor_Number"];
	$de = $_GET["Doctor_Email"];
    $jd = $_GET["Joining_Date"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO doctor VALUES ( NULL, '$fn', '$mn','$ln','$age','$dn','$de','$jd')")
		or die("Can not execute query");

	echo "Record inserted:<br> First Name = $fn <br> Middle Name = $mn <br> Last Name = $ln <br> Age = $age <br> Doctor's Number = $dn <br> Doctor's Email = $de <br> Joining Date = $jd";

	echo "<p><a href=doctor_read.php>READ All Records</a>";
?>
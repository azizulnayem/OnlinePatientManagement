<?php
	$pd = $_GET["Payment_Date"];
	$oa = $_GET["Old_Amount"];
    $na = $_GET["New_Amount"];
	$tp = $_GET["Total_Payment"];
    $p = $_GET["Paid"];
	$un = $_GET["Unpaid"];
    $pt = $_GET["Payment_Time"];
    $pid = $_GET["Patient_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO payment VALUES ( NULL, '$pd', '$oa','$na','$tp','$p','$un','$pt',$pid)")
		or die("Can not execute query");

	echo "Record inserted:<br> Payment's Date = $pd <br> Old Amount = $oa <br> New Amount = $na <br> Total Payment = $tp <br> Paid = $p <br> Unpaid = $un <br> Payment Time = $pt <br> Patient's ID = $pid";

	echo "<p><a href=payment_read.php>READ All Records</a>";
?>
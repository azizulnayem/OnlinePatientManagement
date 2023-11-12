<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$tn = $_GET["Test_Name"];
	$r = $_GET["Result"];
    $tin = $_GET["Time_Needed"];
	$pid = $_GET["Patient_id"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO test VALUES ( '$tn', '$r','$tin',NULL,$pid,$did)")
		or die("Can not execute query");

	echo "<h3>Record inserted:</h3>Test Name = $tn <br> Result = $r <br> Time_Needed = $tin <br> Patient's ID = $pid <br> Doctor's ID = $did";

    echo "<br><br><p><a href=test_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>
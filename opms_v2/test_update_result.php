<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
    $tn = $_GET["tn"];
	$r = $_GET["r"];
	$tin = $_GET["tin"];
    $id = $_GET["id"];
	$pid = $_GET["pid"];
	$did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE test SET Test_Name='$tn', Result='$r', Time_Needed='$tin', Patient_id='$pid', Doctor_id='$did' WHERE Test_Serial = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3>Record updated:</h3> Test Name = $tn <br> Result = $r <br> Time Needed = $tin <br> Patient's ID = $pid <br> Doctor's ID = $did";

    echo "<br><br><p><a href=test_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>
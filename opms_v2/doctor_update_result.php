<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
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

	echo "<h3>Record updated:</h3>First Name = $fname <br> Middle Name = $mname <br> Last Name = $lname <br> Age = $age <br> Doctor's Number = $dno <br> Doctor's Email = $dem <br> Joining Date = $jdate";

	echo "<br><br><p><a href=doctor_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>
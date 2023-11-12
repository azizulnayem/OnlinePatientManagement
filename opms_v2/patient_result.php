<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$e = $_GET["Email"];
    $dob = $_GET["DOB"];
    $fn = $_GET["First_Name"];
	$mn = $_GET["Middle_Name"];
    $ln = $_GET["Last_Name"];
    $pn = $_GET["Patient_Number"];
	$st = $_GET["Street"];
    $c = $_GET["City"];
    $zc = $_GET["Zip_Code"];
    $sta = $_GET["State"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO patient VALUES ( NULL,'$e', '$dob','$fn','$mn','$ln','$pn','$st','$c','$zc','$sta',$did)")
		or die("Can not execute query");

	echo "<h3>Record inserted:</h3>Email = $e <br> DOB = $dob <br> First Name = $fn <br> Middle Name = $mn <br> Last Name = $ln <br> Patient's Number = $pn <br> Street = $st <br> City = $c <br> Zip Code = $zc <br> State = $sta <br> Doctor's ID = $did";

    echo "<br><br><p><a href=patient_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>
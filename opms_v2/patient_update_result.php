<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$id  = $_GET["id"];
	$e = $_GET["e"];
	$dob = $_GET["dob"];
    $fn = $_GET["fn"];
	$mn = $_GET["mn"];
	$lm = $_GET["lm"];
    $pn = $_GET["pn"];
    $st = $_GET["st"];
    $c = $_GET["c"];
    $zc = $_GET["zc"];
    $sta = $_GET["sta"];
    $did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE patient SET Email='$e', DOB='$dob', First_Name='$fn', Middle_Name='$mn', Last_Name='$lm' , Patient_Number='$pn' , Street='$st',City='$c', Zip_Code='$zc', State='$sta' , Doctor_id='$did' WHERE Patient_id = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3>Record updated:</h3>Email = $e <br> DOB = $dob <br> First Name = $fn <br> Middle Name = $mn <br> Last Name = $lm <br> Patient's Number = $pn <br> Street = $st <br> City = $c <br> Zip Code = $zc <br> State = $sta <br> Doctor's ID = $did";

        echo "<br><br><p><a href=patient_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>

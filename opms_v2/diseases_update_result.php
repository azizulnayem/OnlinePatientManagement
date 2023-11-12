<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$dn  = $_GET["dn"];
	$id = $_GET["id"];
	$ds = $_GET["ds"];
    $did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE diseases SET Diseases_Name='$dn', Diseases_Symptom='$ds', Doctor_id='$did' WHERE Diseases_Code = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3>Record updated:</h3>
    Diseases Name = $dn <br> Diseases Symptom = $ds <br> Doctor's ID = $did";

    echo "<br><br><p><a href=diseases_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";	
?>
</body>
</html>
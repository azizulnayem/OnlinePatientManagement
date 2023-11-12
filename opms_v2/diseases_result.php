<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$din = $_GET["Diseases_Name"];
    $ds = $_GET["Diseases_Symptom"];
	$docid = $_GET["Doctor_id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO diseases VALUES ('$din', NULL,'$ds',$docid)")
		or die("Can not execute query");

	echo "<h3>Record inserted:</h3>Diseases Name = $din <br> Diseases Symptom = $ds <br> Doctor's ID = $docid";

    echo "<br><br><p><a href=diseases_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>
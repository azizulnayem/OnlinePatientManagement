<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$dol  = $_GET["dol"];
	$dd = $_GET["dd"];
	$di = $_GET["di"];
    $id = $_GET["id"];
	$did = $_GET["did"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	$query 	= "UPDATE qualifications SET Doc_Q_length='$dol', Doc_Degree='$dd', Doc_Institution='$di', Doctor_id='$did' WHERE Qua_ID = $id";
	echo $query;

	mysqli_query( $connect, $query )
		or die("Can not execute query");

	echo "<h3>Record updated:</h3> Qualification Length = $dol <br> Doctor's Degree = $dd <br> Doctor's Institution = $di <br> Doctor's ID = $did";
        
    echo "<br><br><p><a href=qualifications_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>
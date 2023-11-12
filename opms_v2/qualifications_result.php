<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$dql = $_GET["Doc_Q_length"];
	$dd = $_GET["Doc_Degree"];
    $di = $_GET["Doc_Institution"];
    $did = $_GET["Doctor_id"];
	

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "INSERT INTO qualifications VALUES ('$dql','$dd','$di',NULL,'$did')")
		or die("Can not execute query");
    
    echo "<h3>Record inserted:</h3>
	Qualification Length = $dql <br> Doctor's Degree = $dd <br> Doctor's Institution = $di <br> Doctor's Id = $did";
        
    echo "<br><br><p><a href=qualifications_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";

?>
</body>
</html>
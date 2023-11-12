<html>
	<head>
		<title>Doctor's Information</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
	</head>
	<body>
<?php
	$Doctor_id = $_GET["id"];

	require_once('dbconfig.php');
	$connect = mysqli_connect( HOST, USER, PASS, DB )
		or die("Can not connect");

	mysqli_query( $connect, "DELETE FROM doctor WHERE Doctor_id=$Doctor_id" )
		or die("Can not execute query");

	echo "<h3>Record Deleted!<br><br></h3";

	echo "<br><p><a href=doctor_read.php><button class='ui primary button' type='submit'>Read All Records</button></a></p>";
?>
</body>
</html>